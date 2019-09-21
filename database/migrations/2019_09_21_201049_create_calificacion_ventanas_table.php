<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionVentanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_ventanas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('calificacion_tiempo_carga');
            $table->integer('ventana_id')->unsigned();
            $table->integer('plataforma_usuario_id')->unsigned();
            $table->foreign('ventana_id')->references('id')->on('ventanas');
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
        Schema::dropIfExists('calificacion_ventanas');
    }
}
