<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function mostrarFormulario(){
        $entrenadores = User::all();
        return view('solicitudes.index', compact('entrenadores'));
    }


    public function enviarFormulario(){
        // falta implementar
        return redirect()->route('solicitar')->with('success','Tu formulario se ha enviado con éxito');

    }
}
