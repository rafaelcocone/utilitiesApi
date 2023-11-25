<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="stylesheet" href="{{ asset('css/pdf/etiquetas.css') }}"> --}}
    <title>GUIAS  </title>
</head>
<body>
    <table>
        <tr style="width:260px" >

            <td style="width:160px">

                <span>{!! $rastreo !!}</span>

                <img src="data:image/png;base64, {!! $qrcode !!}">

            </td>

            <td style="width:120px">
                <img src="{{public_path().'/images/logo-menu.png'   }}" alt="Moving-pack" width="80px" height="40px" >

                <p class="title">
                    <span >Franffer Mexicana S.A. de C.V. </span>
                        Avenida Malintzi 86 Col. Malintzi Puebla, Puebla C.P. 72210 -
                        2222428128<br> moving-pack.com
                </p>
            </td>

            <td style="width:20px">
                    <div class="girar45">
                        <span>RUTA</span>
                    </div>
            </td>
        </tr>

        <tr>

            <td colspan='3'>RAZON SOCIAL</td>
        </tr>

        <tr>
            
            <td colspan='3'>
                <p class="remitente">Franffer Mexicana S.A. de C.V. </span>
                    Avenida Malintzi 86 Col. Malintzi Puebla, Puebla C.P. 72210 -
                    2222428128<br> moving-pack.com 
                </p>
            </td>
            
        </tr>

        <tr>
            <td colspan='3'>
                <p class="destinatario">Franffer Mexicana S.A. de C.V. </span>
                    Avenida Malintzi 86 Col. Malintzi Puebla, Puebla C.P. 72210 -
                    2222428128<br> moving-pack.com 
                </p> 
            </td>
        </tr>


        <tr>
            <td colspan="3">
                <p class="mercancias">
                    Mecnacio</td>
                </p>
        </tr>



        <tr>
            <td  >
                <div align="left">
                    <img src="data:image/png;base64,' . {!! $barcode !!} . '" alt="barcode"  width="200px" height="40px"/>
                </div>
                <p class="codebar">{!! $rastreo !!}</p>
            </td>
            <td colspan='3' >
                <div align="right">
                    <img src="data:image/png;base64,' . {!! $barcode !!} . '" alt="barcode"  width="200px" height="40px" />
                </div>
                <p class="codebar">{!! $rastreo !!}</p>
            </td>
        </tr>



        <tr>
            <td colspan="3" class="firma" >
                    </br></br>
                    <p > 
                        FECHA, NOMBRE Y FIRMA DE QUIEN RESIBE
                    </p>
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
  border: 1px  ;
}

.girar45 {
    transform: rotate(90deg);
}

.girar45 span {
    font: 1rem "New Courier", Verdana;
}

.rastreo {
    align:center;
}

.remitente {
    margin: 0 auto;
    width: 100%;
    height: 30px;
    font: .5rem "New Courier", Verdana;
}
.destinatario {
    margin: 0 auto;
    width: 100%;
    height: 50px;
    font: .7rem "New Courier", Verdana;
}
.mercancias {
    margin: 0 auto;
    width: 100%;
    height: 40px;
    font: .5rem "New Courier", Verdana;
}

.codebar {
    margin: 0 auto;
    text-align: center;
    font: .5rem "New Courier", Verdana;
}

.firma{
    width: 300px;
}

.firma p  {
    border-top: 1 solid;
    margin: 0 auto;
    text-align: center;
    width: 300px;
    font: .6rem "New Courier", Verdana;
}





.contenedor {
    display: flex;
    flex-direction: row;
}

.renglon {
    width: 30em
    display: flex;
    flex-direction: column;
}
.columna {
    width: 10em;
    display: flex;
    flex-direction: row;

}

.columna45 {
    transform: rotate(90deg);
}

.columna p{
    line-height:normal;
    font: 0.5rem "Fira Sans", sans-serif;
}

.title {
    line-height:normal;
    font: 0.5rem "Fira Sans", sans-serif;
}



   </style>


</body>
</html>
