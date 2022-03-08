<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PodcastSeeder extends Seeder {
 
    public function run() {
        $idUsuario = DB::table('users')->pluck('id');
        $faker = Faker::create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('podcasts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        for($i = 0; $i < 20; $i++) {
            DB::table('podcasts')->insert([
                'titulo' => $faker->realText($maxNbChars = 10, $indexSize = 2),
                'tema' =>  $faker->sentence($nbWords = 3, $variableNbWords = true),
                'audio' => '/audio/audio-prueba.mp3',
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                'veces_escuchado' => $faker->numberBetween($min = 10, $max = 10000),
                'destacado' => $faker->boolean,
                'user_id' => $faker->randomElement($idUsuario),
            ]);
        }
    }
}
