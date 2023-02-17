<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ControladorAdmin extends Controller
{
    public function articulos()
    {
        return view('Admin.mensajeAdmin')->with(['texto' => 'articulos']);
    }
}
