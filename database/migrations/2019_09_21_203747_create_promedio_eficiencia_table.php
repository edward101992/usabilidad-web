<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromedioEficienciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promedio_eficiencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_1_performance');
            $table->string('item_2_1_accesibilidad_informacion');
            $table->string('item_2_2_accesibilidad_ventana');
            $table->string('item_2_accesibilidad_general');
            $table->string('item_3_cocomo');
            $table->string('item_4_carga_memoria_minima');
            $table->string('item_5_procesos_funcionamiento');
            $table->string('suma_item_eficiencia');
            $table->integer('plataforma_evaluador_id')->unsigned();
            $table->foreign('plataforma_evaluador_id')->references('id')->on('plataforma_evaluador');
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
        Schema::dropIfExists('promedio_eficiencia');
    }
}
