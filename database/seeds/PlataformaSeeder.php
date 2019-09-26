<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\Plataform;

class PlataformaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('plataforms')->truncate();


         $plataforma= Plataform::create([
        	'plataforma_nombre'=>'Usabilidad-Web',
            'plataforma_manual'=>'manual.pdf',
            'plataforma_tiempo_desarrollo'=>10,
            'plataforma_logo'=>'userDefault.png',
            'plataforma_descripcion'=>'Plataformaen la creada para la medicion de Usabilidad en aplicaciones web de la Universidad Cundinamarca - Facatativa',
        	'plataforma_lineas_codigo'=>3000,
            'plataforma_promedio_eficiencia'=>5.00,
            'plataforma_promedio_satisfaccion'=>4.00,
            'plataforma_promedio_eficacia'=>3.00,
            'plataforma_total_usabilidad'=>12.00,
            'plataforma_estado'=>true,        	
        	'plataforma_url'=>'www.Usabilidad-Web.com'       	
        ]);
    }
}
