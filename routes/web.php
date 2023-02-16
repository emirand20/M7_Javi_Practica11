<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;

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

Route::get('/', [PrimerControlador::class, 'arrel']);
Route::get('/hola/{persona?}', [PrimerControlador::class, 'hola']);
//***************MÁS DE UN METODO******************* */
Route::get('/ej1/{controladorEjercicio1?}', 'App\Http\Controllers\controladorEjercicio1@ej1Parametro');
Route::get('/parametros/{param1}/{param2}/{param3}', 'App\Http\Controllers\PrimerControlador@pruebaParametros');