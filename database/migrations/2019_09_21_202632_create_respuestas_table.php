<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('respuesta_descripcion');
            $table->integer('preguntas_id')->unsigned();
            $table->integer('plataforma_usuario_id')->unsigned();
            $table->foreign('preguntas_id')->references('id')->on('preguntas');
            $table->foreign('plataforma_usuario_id')->references('id')->on('plataforma_usuarios');
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
        Schema::dropIfExists('respuestas');
    }
}
