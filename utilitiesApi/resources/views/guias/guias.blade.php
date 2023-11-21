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
            <td>REMITENTE</td>
            <td colspan='2'>CONSIGNATARIO</td>
        </tr>

        <tr>
            <td>REMITENTE</td>
            <td colspan='2'></td>
        </tr>






        <tr>
            <td  >
                <img src="data:image/png;base64,' . {!! $barcode !!} . '" alt="barcode"  width="150px" height="60px"/>
            </td>
            <td colspan='2'>
               <p class="firma">
                FECHA, NOMBRE Y FIRMA DE QUIEN RESIBE
               </p>

            </td>
        </tr>


    </table>



   <div class="contenedor">
        <div class="renglon">
            <div class="columna">
                {!! $rastreo !!}
                <img src="{{public_path().'/images/logo-menu.png'   }}" alt="Moving-pack" width="80px" height="80px" >
            </div>

            <div class="columna">
                <img src="data:image/png;base64,' . {!! $barcode !!} . '" alt="barcode"  width="200px" height="60px" />
                {!! $rastreo !!}
            </div>
        </div>

        <div class="renglon">
            <div >
                <img src="data:image/png;base64,' . {!! $barcode !!} . '" alt="barcode"  width="200px" height="60px" class="columna45"/>
                {!! $rastreo !!}
            </div>
        </div>
   </div>


   <style>

@page {
		margin-left: 0.5cm;
		margin-right: 0.5cm;
        margin-top: 0.5cm;
		margin-button: 0.5cm;
	}


table, th, td {
  border: 1px solid ;
}

.girar45 {
    transform: rotate(90deg);
}

.girar45 span {
    font: 1rem "Fira Sans", sans-serif;
}

.rastreo {
    backgroud-collator_a
}

.firma {
    font: 0.5rem "Fira Sans", sans-serif;
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
