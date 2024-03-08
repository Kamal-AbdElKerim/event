<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
       $reservation = reservation::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.ticket',compact('reservation'));

        // $pdf->setPaper([0, 0, 110, 220], 'mm');
        $pdf->setPaper('a5', 'landscape');

        return $pdf->stream();
    }
}
