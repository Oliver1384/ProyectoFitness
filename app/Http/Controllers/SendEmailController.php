<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;

class SendEmailController extends Controller {
    /**
     * to() -> contiene el correo electronico del receptor
     * El contenido del mensaje se encuentra en la vista "planesPersonalizados.send"
     */
    public static function index($correoEntrenador,$correoUsuario,$objetivo) {
        Mail::to($correoEntrenador)->send(new NotifyMail($correoUsuario,$objetivo));
        $resultado = (Mail::failures()) ? false : true;
        return $resultado;
    }
}
