<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>GUIAS  </title>
</head>
<body>


    <table>
        <tr>
            <td colspan="3" width='300px' >
                <div class="tituloempresa">{!! $datos["empresa"]["nombre"] !!}</div>
                <div class="tituloempresa">
                    {!!  $datos["empresa"]["direccion"]["calle"] !!}
                    {!!  $datos["empresa"]["direccion"]["numero_exterior"] !!}
                    Col. {!!  $datos["empresa"]["direccion"]["colonia"] !!}
                    {!!  $datos["empresa"]["direccion"]["municipio"] !!},
                    {!!  $datos["empresa"]["direccion"]["estado"] !!}
                    CP. {!!  $datos["empresa"]["direccion"]["cp"] !!}

                </div>
                <div class="tituloempresa">Tel. {!! $datos["empresa"]["telefono_principal"] !!}</div>
                <div class="tituloempresa">{!! $datos["empresa"]["pagina_web"] !!}</div>
            </td>
            <td width='80px'> <img src="{{public_path().'/images/logo-menu.png'   }}" alt="Moving-pack" width="80px" height="30px" > </td>
        </tr>

        <tr>
            <td width='50px'>
                <p class="mensaje45">
                    REMITENTE
                </p>

            </td>
            <td colspan="3" width='300px' >
                <div class="datadescripcion">{!! $datos["origen"]["nombre_razon_social"] !!}</div>
                <div class="datadescripcion">
                    {!!  $datos["origen"]["direccion"]["calle"] !!}
                    {!!  $datos["origen"]["direccion"]["numero_exterior"] !!}

                </div>
                <div class="datadescripcion">
                    Col. {!!  $datos["origen"]["direccion"]["colonia"] !!}
                    {!!  $datos["origen"]["municipio"] !!},
                    {!!  $datos["origen"]["estado"] !!}

                </div>
                <div class="datadescripcion">
                    CP. {!!  $datos["origen"]["direccion"]["cp"] !!}
                    Tel. {!! $datos["origen"]["telefono"] !!}
                </div>
            </td>
        </tr>

        <tr>
            <td width='50px'>
                <p class="mensaje45">
                     DESTINATARIO
                </p>
            </td>
            <td colspan="3" width='300px' >
            <div class="datadescripcion">{!! $datos["destino"]["nombre_razon_social"] !!}</div>
                <div class="datadescripcion">
                    {!!  $datos["destino"]["direccion"]["calle"] !!}
                    {!!  $datos["destino"]["direccion"]["numero_exterior"] !!}

                </div>
                <div class="datadescripcion">
                    Col. {!!  $datos["destino"]["direccion"]["colonia"] !!}
                    {!!  $datos["destino"]["municipio"] !!},
                    {!!  $datos["destino"]["estado"] !!}

                </div>
                <div class="datadescripcion">
                    CP. {!!  $datos["destino"]["direccion"]["cp"] !!}
                    Tel. {!! $datos["destino"]["telefono"] !!}
                </div>

            </td>
        </tr>




        <tr>
            <td colspan="2" rowspan="7" width='250px'>
                <img src="data:image/png;base64, {!! $qrcode !!}">

            </td>
            <td  width='100px' >
                <p class="mensajeTitulo">PESO</p>
                <p class="datadescripcion"> {!!  $datos["envio"]["peso"] !!} KG.</p>
            </td>
            <td  width='100px' >
                <p class="mensajeTitulo">AMPARA</p>
                <p class="datadescripcion"> {!!  $datos["envio"]["kilos_amparados"] !!} KG.</p>
            </td>
        </tr>
        <tr>
            <td  width='100px' >
                <p class="mensajeTitulo">TIPO</p>
                <p class="datadescripcion"> {!!  $datos["envio"]["tipo"] !!}</p>
            </td>
            <td  width='100px' >
                <p class="mensajeTitulo">VALOR</p>
                <p class="datadescripcion">$ {!!  $datos["envio"]["valor_declarado"] !!}</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" width='150px' >
                <p class="mensajeTitulo">DIMENSIONES</p>
                <p class="datadescripcion"> {!!  $datos["envio"]["dimensiones"]["largo"] !!} CM. X
                 {!!  $datos["envio"]["dimensiones"]["ancho"] !!} CM. X
                 {!!  $datos["envio"]["dimensiones"]["alto"] !!} CM.</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" width='150px' >
                <p class="mensajeTitulo">RUTA</p>
                <p class="datadescripcion"> {!!  $datos["envio"]["ruta"] !!}</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" width='150px' >
                <p class="mensajeTitulo">IATA</p>
                <p class="datadescripcion"> {!!  $datos["envio"]["iata"] !!}</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" width='150px' >
                <p class="mensajeTitulo">CINTILLO DE SEGURIDAD</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" width='150px' >
                <p class="datadescripcion"> {!!  $datos["envio"]["cintillo_seguridad"] !!}</p>
            </td>
        </tr>


        <tr>
            <td colspan="2" width='200px' height="80px" >

                <div align="center">
                    <p class="codebar">  RASTREO</p>
                    <img src="data:image/png;base64,' . {!! $barcode1 !!} . '" alt="barcode"  width="120px" height="40px"/>
                    <p class="codebar">{!! $rastreo !!}</p>
                </div>


            </td>
            <td colspan="2" width='100px' height="80px">

                <div align="center">
                    <p class="codebar"> NUMERO DE GUIA</p>
                    <img src="data:image/png;base64,' . {!! $barcode2 !!} . '" alt="barcode"  width="140px" height="40px"/>
                    <p class="codebar">{!! $codeguia !!}</p>
                </div>

            </td>
        </tr>

        <tr>
            <td colspan="4" width='100%' >

                    <p class="codebar"> FIRMA Y OBSERVACIONES</p>

            </td>
        </tr>
        <tr>
            <td colspan="4" width='100%'  height="100px" >

            </td>
        </tr>




    </table>

    <style>

    @page {
		margin-left: 0.4cm;
		margin-right: 0.4cm;
        margin-top: 0.5cm;
		margin-button: 0.5cm;
	}

    table, th, td {
        border: 1px solid ;
    }

    .mensaje45 {
        font: .5rem "New Courier", Verdana;
    }

    .tituloempresa {
        margin: 0 auto;
        text-align: left;
        font-weight: bold;
        font: .4rem "New Courier", Verdana;
    }


    .mensajeTitulo{
        margin: 0 auto;
        text-align: left;
        font: .4rem "New Courier", Verdana;
    }

    .datadescripcion {
        margin: 0 auto;
        text-align: left;

        font: .5rem "New Courier", Verdana;
    }

    .codebar {
        margin: 0 auto;
        text-align: center;
        font: .5rem "New Courier", Verdana;
    }

    </style>

</body>
</html>
