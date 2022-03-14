<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder {
    public function run()
    {
        $informacioncentroId = DB::table('informacioncentros')->pluck('id');
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
                    //'centro_id' => $faker->randomElement($informacioncentroId),
                    'password' => $faker->password,
                ]);
            }
        }
        User::firstOrCreate(
            ['name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('1234'),
             'titulacion'=>'primer administrador',
             'presentacion'=>'Buenas soy el administrador y esta es mi presentación de ejemplo, so far so good people.']);
    }
}
