<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable {
    use Queueable, SerializesModels;
    private $correoUsuario;
    private $objetivo;

    public function __construct($correoUsuario,$objetivo) {
        $this->correoUsuario = $correoUsuario;
        $this->objetivo = $objetivo;
    }

    public function build() {
        return $this->view('planesPersonalizados.send',['correoUsuario' => $this->correoUsuario, 'objetivo' => $this->objetivo]);
    }
}
