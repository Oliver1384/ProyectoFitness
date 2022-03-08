<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('imagen')->default('/images/perfil-generico.png');
            $table->string('facebook')->default('https://es-es.facebook.com/');
            $table->string('instagram')->default('https://www.instagram.com/');
            $table->string('linkedin')->default('https://es.linkedin.com/');
            $table->string('titulacion');
            $table->string('presentacion');
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('centro_id')->default(1);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('centro_id')->references('id')->on('informacioncentros')->onDelete('cascade')->onUpdate('cascade');
        });

   
        User::create(['name'=>'admin','email'=>'admin@gmail.com','password'=>'1234', 'titulacion'=>'primer administrador','presentacion'=>'']);
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
