<?php

namespace App\Http\Controllers;

use App\Models\Penawaran;
use App\Models\Perusahaan;
use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\HttpFoundation\Response;

class PenawaranPrintController extends Controller
{
    public function __invoke(Penawaran $penawaran): Response
    {
        $perusahaan = Perusahaan::query()
            ->orderBy('id')
            ->first(['id', 'nama', 'alamat', 'email', 'no_wa', 'logo']);

        $pdf = Pdf::loadView('print.penawaran', [
            'perusahaan' => $perusahaan,
            'penawaran' => $penawaran->load(['layanan']),
        ])->setPaper('a4', 'portrait');

        return $pdf->stream('Penawaran_#'.str_pad($penawaran->id, 5, '0', STR_PAD_LEFT).'.pdf');
    }
}
