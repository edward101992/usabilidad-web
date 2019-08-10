<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Migracion de la tabla usuario en BD.
     */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('usuario_id');
            $table->string('usuario_password');
            $table->string('usuario_nombre');
            $table->string('usuario_apellido');
            $table->string('usuario_documento')->unique();
            $table->string('usuario_telefono');
            $table->string('usuario_email')->unique();
            $table->string('usuario_imagen')->default("public/imagenes/userDefault.png");
            $table->string('usuario_genero');
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
        Schema::dropIfExists('usuario');
    }
}
