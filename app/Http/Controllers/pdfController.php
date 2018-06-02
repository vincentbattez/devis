<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function devis() {
        $data = ['toto'];
        $pdf  = PDF::loadView('pdf.devis', $data);
        // return view('pdf.devis');
        
        // dd($pdf);
        return $pdf->download('devis1.pdf');
    }
}
