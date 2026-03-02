<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function __invoke(): View
    {
        $perusahaan = Perusahaan::query()
            ->orderBy('id')
            ->first(['id', 'nama', 'tentang_kami', 'filosofi', 'visi', 'misi', 'foto']);

        return view('pages.about', compact('perusahaan'));
    }
}
