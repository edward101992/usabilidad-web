<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\PlataformaEstudiante;

class PlataformaEstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataformestudiante = PlataformaEstudiante::create([

        	'plataforma_id' => 1,
        	'usuario_id' => 3

        ]);

        $plataformestudiante = PlataformaEstudiante::create([

        	'plataforma_id' => 1,
        	'usuario_id' => 7

        ]);
    }
}
