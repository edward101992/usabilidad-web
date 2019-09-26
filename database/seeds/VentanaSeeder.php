<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\Ventana;

class VentanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ventana = Ventana::create([
        	'ventana_url' => 'https://www.youtube.com/watch?v=2mIz0U3pz-s',
        	'ventana_carga' => true,
        	'plataforma_id' => 1

        ]);

        $ventana = Ventana::create([
        	'ventana_url' => 'https://www.youtube.com',
        	'ventana_carga' => true,
        	'plataforma_id' => 1

        ]);

        $ventana = Ventana::create([
        	'ventana_url' => 'https://www.facebook.com',
        	'ventana_carga' => true,
        	'plataforma_id' => 1

        ]);

        $ventana = Ventana::create([
        	'ventana_url' => 'https://www.twitter.com',
        	'ventana_carga' => true,
        	'plataforma_id' => 1

        ]);

    }
}
 