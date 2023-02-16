<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    public function arrel()
    {
        return 'Estem al mètode arrel';
    }
    public function hola(Request $request, $persona = '')
    {   
        //return 'Estem al mètode hola';
        dd($request);
        $textoFinal = 'Hola, ';
        $textoFinal .= ($persona = '')? 'mundo':$persona;
        return view('mensaje')->with(['text' => $textoFinal]);
    }
    public function ej1Parametro($controladorEjercicio1 = '')
    {
        $textoFinal = 'Ej1, ';
        $textoFinal .= ($controladorEjercicio1 == '') ? 'hola Roger' : $controladorEjercicio1;
        return view('mensaje')->with(['texto' => $textoFinal]);
    }
    public function pruebaParametros($param1, $param2, $param3)
    {
        $textoFinal = 'El primer parámetro és igual a ' . $param1 . '. ';
        $textoFinal .= 'El segundo parámetro és igual a ' . $param2 . '. ';
        $textoFinal .= 'El tercer parámetro és igual a' . $param3 . '. ';

        return view('mensaje')->with(['texto' => $textoFinal]);
    }
}
