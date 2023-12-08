<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PdfGuiaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'data' => 'required|array',
            
                'data.*.empresa' => 'required|array',
                    'data.*.empresa.nombre' => 'required|string',
                    'data.*.empresa.direccion' => 'required|array',
                        'data.*.empresa.direccion.calle' => 'required|string',
                        'data.*.empresa.direccion.numero_exterior' => 'required|string',
                        'data.*.empresa.direccion.colonia' => 'required|string',
                        'data.*.empresa.direccion.estado' => 'required|string',
                        'data.*.empresa.direccion.municipio' => 'required|string',
                        'data.*.empresa.direccion.cp' => 'required|string',
                    'data.*.empresa.telefono_principal' => 'required|string',
                    'data.*.empresa.pagina_web' => 'required|string',
                    'data.*.empresa.fecha' => 'required|date_equals:dd/mm/yyyy',
                    'data.*.empresa.contrato_cliente' => 'required|string',
                'data.*.origen' => 'required|array',
                    'data.*.origen.nombre_razon_social' => 'required|string',
                    'data.*.origen.direccion' => 'required|array',
                        'data.*.origen.direccion.calle' => 'required|string',
                        'data.*.origen.direccion.numero_exterior' => 'required|string',
                        'data.*.origen.direccion.colonia' => 'required|string',
                        'data.*.origen.direccion.cp' => 'required|string',
                    'data.*.origen.telefono' => 'required|string',
                    'data.*.origen.municipio' => 'required|string',
                    'data.*.origen.estado' => 'required|string',
                    'data.*.origen.pais' => 'required|string',
                'data.*.destino' => 'required|array',
                    'data.*.destino.nombre_razon_social' => 'required|string',
                    'data.*.destino.direccion' => 'required|array',
                        'data.*.destino.direccion.calle' => 'required|string',
                        'data.*.destino.direccion.numero_exterior' => 'required|string',
                        'data.*.destino.direccion.colonia' => 'required|string',
                        'data.*.destino.direccion.cp' => 'required|string',
                    'data.*.destino.telefono' => 'required|string',
                    'data.*.destino.municipio' => 'required|string',
                    'data.*.destino.estado' => 'required|string',
                    'data.*.destino.pais' => 'required|string',
                'data.*.envio' => 'required|array',
                    'data.*.envio.peso' => 'required|numeric',
                    'data.*.envio.tipo' => 'required|string',
                    'data.*.envio.kilos_amparados' => 'required|numeric',
                    'data.*.envio.valor_declarado' => 'required|numeric',
                    'data.*.envio.dimensiones' => 'required|array',
                        'data.*.envio.dimensiones.largo' => 'required|numeric',
                        'data.*.envio.dimensiones.ancho' => 'required|numeric',
                        'data.*.envio.dimensiones.alto' => 'required|numeric',
                    'data.*.envio.ruta' => 'required|string',
                    'data.*.envio.iata' => 'required|string',
                    'data.*.envio.cintillo_seguridad' => 'required|string',
                'data.*.rastreo' => 'required|array',
                    'data.*.rastreo.numero_guia' => 'required|string',
                    'data.*.rastreo.codigo_rastreo' => 'required|string',
        ];
    }
}
