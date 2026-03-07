<?php

namespace App\Http\Controllers;

use App\Models\Po;
use App\Models\Perusahaan;
use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\HttpFoundation\Response;

class PoPrintController extends Controller
{
    public function __invoke(Po $po): Response
    {
        $perusahaan = Perusahaan::query()
            ->orderBy('id')
            ->first(['id', 'nama', 'alamat', 'email', 'no_wa', 'logo']);

        $pdf = Pdf::loadView('print.po', [
            'perusahaan' => $perusahaan,
            'po' => $po->load(['penawaran.layanan']),
        ])->setPaper('a4', 'portrait');

        return $pdf->stream('PurchaseOrder_'.$po->no_po.'.pdf');
    }
}
