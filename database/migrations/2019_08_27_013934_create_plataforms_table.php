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
            $table->string('plataforma_fecha_creacion');
            $table->boolean('plataforma_estado')->default(false);
            $table->text('plataforma_descripcion');
            $table->string('plataforma_logo');
            $table->string('plataforma_url');
            $table->string('plataforma_manual')->default("manual.pdf");
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
