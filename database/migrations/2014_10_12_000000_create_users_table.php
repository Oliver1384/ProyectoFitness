<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('imagen');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('titulacion');
            $table->string('presentacion');
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('centro_id');
            $table->string('password');

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('centro_id')->references('id')->on('informacioncentro')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
