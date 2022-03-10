<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;

class SendEmailController extends Controller {
    /**
     * to() -> contiene el correo electronico del receptor
     * El contenido del mensaje se encuentra en la vista "planesPersonalizados.send"
     */
    public function index() {
        Mail::to('oliverartilesortega@alumno.ieselrincon.es')->send(new NotifyMail());
        if (Mail::failures()) {
            return response()->json('Sorry! Please try again latter');
        }else{
            return response()->json('Great! Successfully send in your mail');
        }
    }
}
