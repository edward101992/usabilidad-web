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

    		'encuesta_nombre' => 'Encuesta Accesibilidad de la Informacion'

    	]);

    	$encuesta = Encuesta::create([

    		'encuesta_nombre' => 'Encuesta Atractibilidad'

    	]);

    	$encuesta = Encuesta::create([

    		'encuesta_nombre' => 'Encuesta Simplicidad'

    	]);

        $encuesta = Encuesta::create([

            'encuesta_nombre' => 'Encuesta Consistencia'

        ]);


        $encuesta = Encuesta::create([

            'encuesta_nombre' => 'Encuesta Uniformidad'

        ]);

        $encuesta = Encuesta::create([

            'encuesta_nombre' => 'Encuesta Legibilidad'

        ]);

        $encuesta = Encuesta::create([

            'encuesta_nombre' => 'Encuesta Navigabilidad'

        ]);

    }
}