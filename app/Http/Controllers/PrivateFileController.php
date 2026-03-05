<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PrivateFileController extends Controller
{
    public function __invoke(string $path): StreamedResponse
    {
        abort_if(str_contains($path, '..'), 404);

        $path = ltrim($path, '/');
        $publicPath = Str::startsWith($path, 'storage/')
            ? Str::after($path, 'storage/')
            : $path;

        if (Storage::disk('local')->exists($path)) {
            return Storage::disk('local')->response($path);
        }

        if (Storage::disk('public')->exists($publicPath)) {
            return Storage::disk('public')->response($publicPath);
        }

        abort(404);
    }
}
