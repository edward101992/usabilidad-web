<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\Genero;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = Genero::create([

        	'genero_nombre' => 'Femenino'

        ]);

        $genero = Genero::create([

        	'genero_nombre' => 'Masculino'

        ]);

        $genero = Genero::create([

        	'genero_nombre' => 'Otro'

        ]);
    }
}

