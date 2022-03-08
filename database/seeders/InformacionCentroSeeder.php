<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class InformacionCentroSeeder extends Seeder {
    
    public function run() {
        if(empty(DB::table('informacioncentro')->count())) {
            DB::table('informacioncentro')->insert([
                'nombre' => 'IES Arucas-Domingo Rivero',
                'direccion' =>  'Cam. de la Cruz, 22, 35400 Arucas, Las Palmas',
                'correo' => '35013842@gobiernodecanarias.org',
                'telefono' => '928602844',
                'youtube' => 'https://www.youtube.com/',
                'instagram' => 'https://www.instagram.com/',
                'facebook' =>'https://es-es.facebook.com/',
            ]);
        }
    }
}
