<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventanas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ventana_url');
            $table->boolean('ventana_carga');
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
        Schema::dropIfExists('ventanas');
    }
}
