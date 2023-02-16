<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorEjercicio1 extends Controller
{
    public function ej1Parametro()
    {
        return 'Me complique la vida';
    }
    public function ej2($menajeEj2)
    {
        $textoFinal = 'Éste es el resultado del primer ejercicio de la práctica hecha por <3' . $menajeEj2;
        return view('mensaje')->with(['text' => $textoFinal]);
    }
}
