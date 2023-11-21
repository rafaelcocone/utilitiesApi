<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Legacy\guias;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use \Milon\Barcode\DNS1D;

class GuiasController extends Controller
{




    public function pdfGuias($guia){


        //1 inch = 72 point
        //1 inch = 2.54 cm
        $alto = 430.00; //15.2 cm = 15.2/2.54*72 = 430
        $ancho = 289.00;//10.2 cm = 10.2/2.54*72 = 289
        $customPaper = array(0,0,$alto,$ancho);


        $rastreo =    $guia;
        $qrcode = base64_encode(
            QrCode::format('svg')
                ->size(150)
                ->merge(public_path('images/logo-menu.png'),0.3, true )
                ->errorCorrection('H')
                ->generate('https://moving-pack.com/rastreo/?c='.$rastreo));

        $barcode = DNS1D::getBarcodePNG($rastreo, 'C39+',3,33);

        $data = [
            'rastreo' => $rastreo,
            'qrcode' => $qrcode,
            'barcode' => $barcode,



        ];

        $pdf = Pdf::loadView('guias.guias',  $data)->setPaper($customPaper, 'landscape');
        //return $pdf->download($guia.'.pdf');
        return $pdf->stream($guia.'.pdf');
    }
}
