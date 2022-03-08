<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function mostrarFormulario(){
        return view('solicitudes.index');
    }


    public function enviarFormulario(){
        // falta implementar
        return redirect()->route('solicitar')->with('success','Tu formulario se ha enviado con éxito');
        
    }
}
