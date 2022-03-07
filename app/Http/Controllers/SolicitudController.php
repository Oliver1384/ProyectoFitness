<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function mostrarFormulario(){
        return view('solicitudes.index');
    }
}
