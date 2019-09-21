<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_tareas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pasos_evaluador');
            $table->date('tiempo_evaluador');
            $table->integer('tarea_id')->unsigned();
            $table->integer('plataforma_usuario_id')->unsigned();
            $table->foreign('tarea_id')->references('id')->on('tareas');
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
        Schema::dropIfExists('calificacion_tareas');
    }
}
