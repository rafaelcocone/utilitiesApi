<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias', function (Blueprint $table) {
            $table->id();

            $table->string("empresa_nombre");
            $table->string("empresa_calle");
            $table->string("empresa_numero_exterior");
            $table->string("empresa_colonia");
            $table->string("empresa_estado");
            $table->string("empresa_municipio");
            $table->string("empresa_cp");
            $table->string("empresa_telefono_principal");
            $table->string("empresa_pagina_web");
            $table->date("empresa_fecha");
            $table->string("empresa_contrato_cliente");
           
            $table->string("origen_nombre_razon_social");
            $table->string("origen_calle");
            $table->string("origen_numero_exterior");
            $table->string("origen_colonia");
            $table->string("origen_cp");
            $table->string("origen_telefono");
            $table->string("origen_municipio");
            $table->string("origen_estado");
            $table->string("origen_pais");
           
            $table->string("destino_nombre_razon_social");
            $table->string("destino_calle");
            $table->string("destino_numero_exterior");
            $table->string("destino_colonia");
            $table->string("destino_cp");
            $table->string("destino_telefono");
            $table->string("destino_municipio");
            $table->string("destino_estado");
            $table->string("destino_pais");
           
            $table->float("envio_peso",4,3);
            $table->string("envio_tipo");
            $table->integer("envio_kilos_amparados");
            $table->integer("envio_valor_declarado");
            $table->integer("envio_largo");
            $table->integer("envio_ancho");
            $table->integer("envio_alto");
            $table->string("envio_ruta");
            $table->string("envio_iata");
            $table->string("envio_cintillo_seguridad");
           
            $table->string("rastreo_numero_guia");
            $table->string("rastreo_codigo_rastreo");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guias');
    }
}
