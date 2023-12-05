<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Guias;
use Illuminate\Http\Request;

class GuiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'guias' => 'required|array',
            
            'guias.*.empresa' => 'required|array',
                'guias.*.empresa.nombre' => 'required|string',
                'guias.*.empresa.direccion' => 'required|array',
                    'guias.*.empresa.direccion.calle' => 'required|string',
                    'guias.*.empresa.direccion.numero_exterior' => 'required|string',
                    'guias.*.empresa.direccion.colonia' => 'required|string',
                    'guias.*.empresa.direccion.estado' => 'required|string',
                    'guias.*.empresa.direccion.municipio' => 'required|string',
                    'guias.*.empresa.direccion.cp' => 'required|string',
        ]);



        return $request;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guias  $guias
     * @return \Illuminate\Http\Response
     */
    public function show(Guias $guias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guias  $guias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guias $guias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guias  $guias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guias $guias)
    {
        //
    }

    public function pruebas(Request $request)
    {
        



        return $request;
    }


}




