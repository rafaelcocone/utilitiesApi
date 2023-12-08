<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GuiasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guias/etiquetas', [   App\Http\Controllers\GuiasController::class, 'etiqueta'])->name('etiqueta.pdf');

Route::get('/guias/carta', [   App\Http\Controllers\GuiasController::class, 'carta'])->name('carta.pdf');

Route::get('/guias/pruebas', [   App\Http\Controllers\GuiasController::class, 'pruebas'])->name('guias.pdf');


 