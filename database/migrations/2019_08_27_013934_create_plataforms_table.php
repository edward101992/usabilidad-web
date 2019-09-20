<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlataformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plataforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plataforma_nombre');
            $table->string('plataforma_manual')->default("manual.pdf");
            $table->integer('plataforma_tiempo_desarrollo');
            $table->string('plataforma_logo');
            $table->text('plataforma_descripcion');
            $table->integer('plataforma_lineas_codigo');
            $table->float('plataforma_promedio_eficiencia');
            $table->float('plataforma_promedio_satisfaccion');
            $table->float('plataforma_promedio_eficacia');
            $table->float('plataforma_total_usabilidad');
            $table->boolean('plataforma_estado')->default(false);     
            $table->string('plataforma_url');
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
        Schema::dropIfExists('plataforms');

    }
}
