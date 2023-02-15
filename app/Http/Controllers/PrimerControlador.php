<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    public function hola($persona = ''){
        $textoFinal = 'Hola, ';
        $textoFinal = ($persona == '')? 'mundo':$persona;
        return view('mensaje') -> with(['texto' => $textoFinal]);
    }
}
