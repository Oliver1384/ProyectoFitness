<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Informacioncentro;

class InformacionCentroSeeder extends Seeder {
    
    public function run() {
        Informacioncentro::firstOrCreate([ 'nombre' => 'IES Arucas-Domingo Rivero',
        'direccion' =>  'Cam. de la Cruz, 22, 35400 Arucas, Las Palmas',
        'correo' => '35013842@gobiernodecanarias.org',
        'telefono' => '928602844',
        'youtube' => 'https://www.youtube.com/',
        'instagram' => 'https://www.instagram.com/',
        'facebook' =>'https://es-es.facebook.com/',
    ]);
    }
}
