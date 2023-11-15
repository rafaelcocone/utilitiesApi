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
        <tr>
            <td>
                <img src="{{public_path().'/images/logo-menu.png'   }}" alt="Moving-pack" width="80px" height="80px" > 
            </td>
            <td>
                <p>{!! $rastreo !!}</p>
                <img src="data:image/png;base64, {!! $qrcode !!}">
                                
            </td>
            <td>
                <p class="title">
                    <span >Franffer Mexicana S.A. de C.V. </span>
                        Avenida Malintzi 86 Col. Malintzi Puebla, Puebla C.P. 72210 -
                        2222428128<br> moving-pack.com
                </p>
            </td>
           
        </tr>


    </table>



   <div class="contenedor">
        <div class="renglon">
            <div class="columna">
                <img src="{{public_path().'/images/logo-menu.png'   }}" alt="Moving-pack" width="80px" height="80px" >        
            </div>
            <div class="columna">
                <p >
                    <span >Franffer Mexicana S.A. de C.V. </span>
                        Avenida Malintzi 86 Col. Malintzi Puebla, Puebla C.P. 72210 -
                        2222428128<br> moving-pack.com
                </p>
            </div>
        </div>
      


   </div>


   <style>

@page {
		margin-left: 0.5cm;
		margin-right: 0;
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