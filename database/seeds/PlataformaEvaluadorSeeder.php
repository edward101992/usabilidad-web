<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\PlataformaEvaluador;

class PlataformaEvaluadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataformaevaluador = PlataformaEvaluador::create([
        	'suma_usabilidad' => 17.46,
        	'pltaforma_id' => 1,
        	'usuario_id' => 2

        ]);


    }
}

