<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    public function __construct()
    {
        $perusahaan = Perusahaan::query()
            ->orderBy('id')
            ->first(['id', 'nama', 'alamat', 'email', 'no_wa', 'media_sosial']);

        View::share('perusahaan', $perusahaan);
    }
}
