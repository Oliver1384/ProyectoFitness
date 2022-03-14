<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller {
    public function mostrarFormulario(){
        $entrenadores = User::all();
        return view('solicitudes.index', compact('entrenadores'));
    }

    public function enviarFormulario(Request $request){
        $entrenador = User::find($request->entrenador)->email;
        $correoUsuario = $request->email;
        $objetivo = $request->objetivo;
        $respuesta = SendEmailController::index($entrenador,$correoUsuario,$objetivo);
        return $respuesta ? redirect()->route('solicitar')->with('success','Tu formulario se ha enviado con éxito') : redirect()->route('solicitar')->with('fail','Ha ocurrido un error al enviar el correo');
    }
}
