<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PDFController extends Controller
{
 

    public function generatePDF($id)
    {
        $reservation = reservation::find($id);

        $url = "name: " . $reservation->user->name . " && email: " . $reservation->user->email;
        $qrCode = QrCode::size(200)->generate($url);
    
     

        
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.ticket',compact('reservation','qrCode'));


        $pdf->setPaper('a5', 'landscape');

        return $pdf->stream();
    }
}
