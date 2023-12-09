<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Guias;
use Illuminate\Http\Request;

use App\Http\Requests\PdfApiGuiaRequest;

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
    public function store(PdfApiGuiaRequest $request)
    {
        





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




