<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tarea_nombre');
            $table->text('tarea_descripcion');
            $table->integer('tarea_numero_pasos');
            $table->string('tarea_tiempo');
            $table->integer('plataforma_id')->unsigned();
            $table->foreign('plataforma_id')->references('id')->on('plataforms');
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
        Schema::dropIfExists('tareas');
    }
}
