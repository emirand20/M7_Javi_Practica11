<?php

namespace App\Http\Controllers;

class controladorEjercicio1 extends Controller
{
    public function ej1()
    {
        return 'Me complique la vida';
    }
    public function ej2($mensajeEj2)
    {
        return 'Éste es el resultado del primer ejercicio de la práctica hecha por <3 ' . $mensajeEj2;
    }
    public function ej3()
    {
        $textoFinal = 'Éste es el resultado del primer ejercicio de la práctica hecha por <3 ';
        return view('mensaje')->with(['text' => $textoFinal]);
    }
    public function cuatroParametros($param1, $param2, $param3, $param4)
    {
        $textoFinal = 'El primer parámetro és igual a ' . '"'. $param1 . '" . ';
        $textoFinal .= 'El segundo parámetro és igual a ' . '"'. $param2 . '". ';
        $textoFinal .= 'El tercer parámetro és igual a ' .'"'. $param3 . '". ';
        $textoFinal .= 'El tercer parámetro és igual a ' .'"'. $param4 . '". ';

        return view('mensaje')->with(['text' => $textoFinal]);
    }
}
