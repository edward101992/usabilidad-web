<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromedioSatisfaccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promedio_satisfaccion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_1_hipervinculo');
            $table->string('item_2_paginas_muertas');
            $table->string('item_3_atractivilidad');
            $table->string('item_4_simplicidad');
            $table->string('item_5_flexibilidad');
            $table->string('item_6_consistencia');
            $table->string('item_7_uniformidad');
            $table->string('item_8_legibilidad');
            $table->string('item_9_navegabilidad');
            $table->string('suma_item_satisfaccion');
            $table->integer('plataforma_usuario_id')->unsigned();
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
        Schema::dropIfExists('promedio_satisfaccion');
    }
}
