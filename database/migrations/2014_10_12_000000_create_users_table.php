<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->increments('id');
            $table->string('name');
            $table->string('usuario_apellido');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('usuario_documento')->unique();
            $table->string('usuario_telefono');
            $table->string('usuario_imagen')->default("public/imagenes/userDefault.png");
            $table->enum('usuario_genero',['Femenino','Masculino']);
            $table->boolean('usuario_estado')->default(false);
            $table->rememberToken();
            $table->timestamps();
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
