<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;

class SendEmailController extends Controller
{
    /**
     * El parámetro de send() es el mensaje que envías
     * to() --> el correo al que va dirigido
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
