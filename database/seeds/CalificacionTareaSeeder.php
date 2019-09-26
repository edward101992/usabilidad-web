<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\CalificacionTarea;

class CalificacionTareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calificaciontarea = CalificacionTarea::create([
        	'pasos_evaluador' => 5,
        	'tiempo_evaluador' => '22/08/12 00:06:34',
        	'tarea_id' => 1,
        	'plataforma_evaluador_id' => 1

        ]);

        $calificaciontarea = CalificacionTarea::create([
        	'pasos_evaluador' => 4,
        	'tiempo_evaluador' => '22/08/12 00:03:34',
        	'tarea_id' => 2,
        	'plataforma_evaluador_id' => 1

        ]);

        $calificaciontarea = CalificacionTarea::create([
        	'pasos_evaluador' => 3,
        	'tiempo_evaluador' =>'22/08/12 00:02:34',
        	'tarea_id' => 3,
        	'plataforma_evaluador_id' => 1

        ]);

        $calificaciontarea = CalificacionTarea::create([
        	'pasos_evaluador' => 8,
        	'tiempo_evaluador' => '22/08/12 00:05:40',
        	'tarea_id' => 4,
        	'plataforma_evaluador_id' => 1

        ]);

        $calificaciontarea = CalificacionTarea::create([
        	'pasos_evaluador' => 7,
        	'tiempo_evaluador' => '22/08/12 00:02:34',
        	'tarea_id' => 5,
        	'plataforma_evaluador_id' => 1

        ]);

        $calificaciontarea = CalificacionTarea::create([
        	'pasos_evaluador' => 10,
        	'tiempo_evaluador' => '22/08/12 00:06:12',
        	'tarea_id' => 6,
        	'plataforma_evaluador_id' => 1

        ]);



    }
}
