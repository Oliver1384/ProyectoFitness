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
        for($i = 1; $i <= 20; $i++) {
            DB::table('posts')->insert([
                'titulo' => "Artículo {$i}",
                'descripcion' =>  $faker->sentence($nbWords = 100, $variableNbWords = true),
                'imagen' => "/images/provisional-desarrollo/post2.jpg",
                'user_id' => $faker->randomElement($idUsuario),
                'destacado' => $faker->boolean,
            ]);
           
        }
    }
}
