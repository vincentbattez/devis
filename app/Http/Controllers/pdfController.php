<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;
use App\User;

use App\Devis;

class PdfController extends Controller
{
    public function devis($id_devis) {
        $devis = Devis::where('id',$id_devis)->first();
        setlocale(LC_TIME, "fr_FR");

        $pdf = PDF::loadView('pdf.devis', [
            'devis' => $devis,
        ]);

        return view('pdf.devis', ['devis' => $devis]);
        
        return $pdf->download('devis1.pdf');
    }
}
