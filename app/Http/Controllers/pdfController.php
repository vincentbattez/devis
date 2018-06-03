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
        // dd($devis);
        setlocale(LC_TIME, "fr_FR");
        $data = [
            'devis' => $devis,
        ];
        // dd($devis->nb_type);
        $pdf  = PDF::loadView('pdf.devis', $data);
        return view('pdf.devis', $data);
        
        return $pdf->download('devis1.pdf');
    }
}
