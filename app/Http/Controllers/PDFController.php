<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $pdf = PDF::loadView('prijavas.pdf');
  
        return $pdf->stream('proba.pdf','attachment => 0');
    }
}
