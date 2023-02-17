<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\controladorEjercicio1;


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

//***************POWER 0******************* */
Route::get('/', [PrimerControlador::class, 'arrel']);
Route::get('/hola/{persona?}', [PrimerControlador::class, 'hola']);
Route::get('/parametros/{param1}/{param2}/{param3}', 'App\Http\Controllers\PrimerControlador@pruebaParametros');
//***************PRACTICA 11******************* */
Route::get('/ej1', [controladorEjercicio1::class, 'ej1']);
Route::get('/ej2/{menajeEj2}', [controladorEjercicio1::class, 'ej2']);
Route::get('/ej3/primeraView', [controladorEjercicio1::class, 'ej3']);
Route::get('/parametros/{param1}/{param2}/{param3}/{param4}',  [controladorEjercicio1::class, 'cuatroParametros']);



