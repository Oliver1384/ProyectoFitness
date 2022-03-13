<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder {
    public function run() {
        $faker = Faker::create();
        if (DB::table('users')->count() < 50) {
            for ($i = 0; $i < 20; $i++) {
                DB::table('users')->insert([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'imagen' => $faker->imageUrl($width = 640, $height = 480),
                    'facebook' => 'https://es-es.facebook.com/',
                    'instagram' => 'https://www.instagram.com/',
                    'linkedin' => 'https://es.linkedin.com/',
                    'titulacion' => $faker->jobTitle,
                    'presentacion' => $faker->sentence($nbWords = 10, $variableNbWords = true),
                    'password' => $faker->password,
                ]);
            }
        }
        User::firstOrCreate(
            ['name'=>'admin',
            'email'=>'proyectofitnessgc@gmail.com',
            'password'=> bcrypt('8h38s/L'),
             'titulacion'=>'primer administrador',
             'presentacion'=>'']);
    }
}
