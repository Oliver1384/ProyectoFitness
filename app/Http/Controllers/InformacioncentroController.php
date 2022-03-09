<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacioncentro;

class InformacioncentroController extends Controller
{
    public function create(array $data) {
        return  Informacioncentro::create([
                'nombre' => $data['nombre'],
                'correo' => $data['correo'],
                'telefono' => $data['telefono'],
                'youtube' => $data['youtube'],
                'instagram'=> $data['instagram'],
                'facebook' => $data['facebook'],
            ]);
    }
}
