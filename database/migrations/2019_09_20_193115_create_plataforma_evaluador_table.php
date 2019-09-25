<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlataformaEvaluadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plataforma_evaluador', function (Blueprint $table) {
            $table->increments('id');
            $table->float('suma_usabilidad');
            $table->integer('plataforma_id')->unsigned();
            $table->integer('usuario_id')->unsigned();        
            $table->foreign('plataforma_id')->references('id')->on('plataforms');
            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::dropIfExists('plataforma_evaluador');
    }
}
