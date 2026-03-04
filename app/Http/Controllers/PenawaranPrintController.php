<?php

namespace App\Http\Controllers;

use App\Models\Penawaran;
use App\Models\Perusahaan;
use Illuminate\View\View;

class PenawaranPrintController extends Controller
{
    public function __invoke(Penawaran $penawaran): View
    {
        $perusahaan = Perusahaan::query()
            ->orderBy('id')
            ->first(['id', 'nama', 'alamat', 'email', 'no_wa', 'logo']);

        return view('print.penawaran', [
            'perusahaan' => $perusahaan,
            'penawaran' => $penawaran->load(['layanan']),
        ]);
    }
}
