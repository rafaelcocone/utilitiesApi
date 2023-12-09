<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Legacy\guias;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use \Milon\Barcode\DNS1D;


use App\Http\Requests\PdfGuiaRequest;

class GuiasController extends Controller
{




    public function etiqueta(Request $request){

        //1 inch = 72 point
        //1 inch = 2.54 cm
        $alto = 430.00; //15.2 cm = 15.2/2.54*72 = 430
        $ancho = 289.00;//10.2 cm = 10.2/2.54*72 = 289
        $customPaper = array(0,0,$alto,$ancho);

        $variables = $request->all();

        $rastreo =  $variables["data"]["rastreo"]["codigo_rastreo"];//'prueba';
        $codeguia =  $variables["data"]["rastreo"]["numero_guia"];//'PUEVS12345678';
        $guia =     $rastreo;

        $qrcode = base64_encode(
            QrCode::format('svg')
                ->size(130)
                ->merge(public_path('images/logo-menu.png'),0.3, true )
                ->errorCorrection('H')
                ->generate('https://moving-pack.com/rastreo/?c='.$rastreo));

        $barcode1 = DNS1D::getBarcodePNG($rastreo, 'C39+',3,33);
        $barcode2 = DNS1D::getBarcodePNG($codeguia, 'C39+',3,33);

        //foreach( $variables["data"] as $arr ){
        $data = [
            'rastreo' => $rastreo,
            'codeguia' => $codeguia,
            'qrcode' => $qrcode,
            'barcode1' => $barcode1,
            'barcode2' => $barcode2,
            'datos' => $variables["data"]
        ];
        //}

        $pdf = Pdf::loadView('guias.etiqueta2',  $data)->setPaper($customPaper, 'landscape');
        //return $pdf->download($guia.'.pdf');
        return $pdf->stream($guia.'.pdf');
    }



    public function carta(PdfGuiaRequest $request){

        $variables = $request->all();

        $rastreo =  $variables["data"]["rastreo"]["codigo_rastreo"];//'prueba';
        $codeguia =  $variables["data"]["rastreo"]["numero_guia"];//'PUEVS12345678';
        $guia =     $rastreo;


        $qrcode = base64_encode(
            QrCode::format('svg')
                ->size(180)
                ->merge(public_path('images/logo-menu.png'),0.3, true )
                ->errorCorrection('H')
                ->generate('https://moving-pack.com/rastreo/?c='.$rastreo));

        $barcode1 = DNS1D::getBarcodePNG($rastreo, 'C39+',3,33);
        $barcode2 = DNS1D::getBarcodePNG($codeguia, 'C39+',3,33);

        //foreach( $variables["data"] as $arr ){
        $data = [
            'rastreo' => $rastreo,
            'codeguia' => $codeguia,
            'qrcode' => $qrcode,
            'barcode1' => $barcode1,
            'barcode2' => $barcode2,
            'datos' => $variables["data"]
        ];
        //}

        $pdf = Pdf::loadView('guias.carta',  $data)->setPaper( 'letter', 'landscape');
        //return $pdf->download($guia.'.pdf');
        return $pdf->stream($guia.'.pdf');
    }




    public function pruebas(Request $request){

        //1 inch = 72 point
        //1 inch = 2.54 cm
        $alto = 430.00; //15.2 cm = 15.2/2.54*72 = 430
        $ancho = 289.00;//10.2 cm = 10.2/2.54*72 = 289
        $customPaper = array(0,0,$alto,$ancho);

        $variables = $request->all();

        $rastreo =  $variables["data"]["rastreo"]["codigo_rastreo"];//'prueba';
        $codeguia =  $variables["data"]["rastreo"]["numero_guia"];//'PUEVS12345678';
        $guia =     $rastreo;

        $qrcode = base64_encode(
            QrCode::format('svg')
                ->size(130)
                ->merge(public_path('images/logo-menu.png'),0.3, true )
                ->errorCorrection('H')
                ->generate('https://moving-pack.com/rastreo/?c='.$rastreo));

        $barcode1 = DNS1D::getBarcodePNG($rastreo, 'C39+',3,33);
        $barcode2 = DNS1D::getBarcodePNG($codeguia, 'C39+',3,33);

        //foreach( $variables["data"] as $arr ){

        $data = [
            'rastreo' => $rastreo,
            'codeguia' => $codeguia,
            'qrcode' => $qrcode,
            'barcode1' => $barcode1,
            'barcode2' => $barcode2,
            'datos' => $variables["data"]
        ];


        //}

        $pdf = Pdf::loadView('guias.etiqueta2',  $data)->setPaper($customPaper, 'landscape');
        //return $pdf->download($guia.'.pdf');
        return $pdf->stream($guia.'.pdf');
    }


}
/**
 *
 * {

	"data":
		{
			"empresa": {
				"nombre": "Franffer Mexicana S.A. de C.V.",
				"direccion": {
					"calle": "Avenida Malintzi",
					"numero_exterior": "86",
					"colonia": "Malintzi",
					"estado": "Puebla",
					"municipio": "Puebla",
					"cp": "72210"
				},
				"telefono_principal": "2222428128",
				"pagina_web": "moving-pack.com",
				"fecha":"24/11/2023",
				"contrato_cliente": "ATM123454"
			},
			"origen": {
    		"nombre_razon_social": "AUTO PARTES Y MAS APYMSA CAPU",
    		"direccion": {
      		"calle": "BLVD CARMEN SERDAN",
      		"numero_exterior": "54",
      		"colonia": "SANTA MARIA RIVERA",
      		"cp": "72010"
    		},
				"telefono": "963852741",
    		"municipio": "PUEBLA",
    		"estado": "PUEBLA",
    		"pais": "MEXICO"
  		},
			"destino": {
    		"nombre_razon_social": "BENITO RAMIREZ ALVAREZ",
    		"direccion": {
      		"calle": "2 SUR",
      		"numero_exterior": "1100",
      		"colonia": "SAN DIEGO",
      		"cp": "75200"
    		},
    		"telefono": "147852369",
    		"municipio": "TEPEACA",
    		"estado": "PUEBLA",
    		"pais": "MEXICO"
  		},
			"envio": {
    		"peso": "20.00",
    		"tipo": "CAJA",
    		"kilos_amparados": "30",
    		"valor_declarado": "1.00",
				"dimensiones": {
					"largo":"30",
					"ancho":"30",
					"alto":"20"
				},
    		"ruta": "LIBRES",
    		"iata": "PUE",
    		"cintillo_seguridad": "123456"
  		},
			"rastreo": {
    		"numero_guia": "PUEVS12345678",
    		"codigo_rastreo": "prueba"
  		}
		}

}
 *
 *
 *
 */
