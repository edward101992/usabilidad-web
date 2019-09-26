<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\Encuesta;

class EncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$encuesta = Encuesta::create([

    		'encuesta_nombre' => 'Encuesta de Satisfaccion'

    	]);

    	$encuesta = Encuesta::create([

    		'encuesta_nombre' => 'Encuesta de Eficacia'

    	]);

    	$encuesta = Encuesta::create([

    		'encuesta_nombre' => 'Encuesta de Eficiencia'

    	]);

    }
}