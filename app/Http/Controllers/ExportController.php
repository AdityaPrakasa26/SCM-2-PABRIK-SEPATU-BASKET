<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use PDF;

class ExportController extends Controller
{
    public function exportPDF()
    {
        $barang = Barang::all();

        $pdf = PDF::loadView('pdf.export', compact('barang'));
        return $pdf->download('export.pdf');
    }
}
