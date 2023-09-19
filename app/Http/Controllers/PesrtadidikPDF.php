<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\PesertadidikMO;
class PesrtadidikPDF extends Controller
{
    public function pdf()
    {
        $pesertaMO = PesertadidikMO::all();
        $pdf = PDF::loadview('pesertadidik_pdf', ['pesertaMO' => $pesertaMO]);
        return $pdf->stream('pesertadidik.pdf');
    }
}
