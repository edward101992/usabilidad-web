<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromedioEficaciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promedio_eficacia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_1_comandos_necesarios');
            $table->date('item_2_tiempo_tarea');
            $table->string('item_3_tareas_complicadas');
            $table->string('suma_item_eficacia');
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
        Schema::dropIfExists('promedio_eficacia');
    }
}
