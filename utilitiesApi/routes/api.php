<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('v1/guias/',        App\Http\Controllers\Api\V1\GuiasController::class)->only('show');

Route::get('login', [LoginController::class, 'store'] );

Route::middleware('auth:sanctum')->group(function (){
    Route::apiResource('v1/guias/',        App\Http\Controllers\Api\V1\GuiasController::class)->only('show','store');
});


//Route::post('v1/s/guias/', [   App\Http\Controllers\Api\V1\GuiasController::class, 'pruebas']);