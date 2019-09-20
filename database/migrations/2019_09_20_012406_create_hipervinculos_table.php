<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHipervinculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hipervinculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hipervinculo_url');
            $table->boolean('hipervinculo_carga')->default(true);
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
        Schema::dropIfExists('hipervinculos');
    }
}
