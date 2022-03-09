<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    
    public function run() {
        $idUsuario = DB::table('users')->pluck('id');
        $faker = Faker::create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('posts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        for($i = 0; $i < 20; $i++) {
            DB::table('posts')->insert([
                'titulo' => $faker->realText($maxNbChars = 10, $indexSize = 2),
                'descripcion' =>  $faker->sentence($nbWords = 3, $variableNbWords = true),
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                'user_id' => $faker->randomElement($idUsuario),
                'destacado' => $faker->boolean,
            ]);
        }
    }
}
