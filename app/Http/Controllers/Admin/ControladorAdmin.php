<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ControladorAdmin extends Controller
{
    public function articulos()
    {
        return view('Admin.mensajeAdmin')->with(['text'=>'Bienvenidos a la pagina artículos']);
    }
}
