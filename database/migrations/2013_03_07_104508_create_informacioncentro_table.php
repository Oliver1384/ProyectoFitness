<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Informacioncentro;

class CreateInformacioncentroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacioncentros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->string('youtube');
            $table->string('instagram');
            $table->string('facebook');
            $table->timestamps();
        });
        
        Informacioncentro::create([ 'nombre' => 'IES Arucas-Domingo Rivero',
            'direccion' =>  'Cam. de la Cruz, 22, 35400 Arucas, Las Palmas',
            'correo' => '35013842@gobiernodecanarias.org',
            'telefono' => '928602844',
            'youtube' => 'https://www.youtube.com/',
            'instagram' => 'https://www.instagram.com/',
            'facebook' =>'https://es-es.facebook.com/',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informacioncentro');
    }
}
