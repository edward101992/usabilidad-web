<?php

use Illuminate\Database\Seeder;
use App\Plataform;

class PlataformaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $plataforma= Plataform::create([
        	'plataforma_nombre'=>'Usabilidad-Web',
        	'plataforma_fecha_creacion'=>'12-01-1999',
        	'plataforma_estado'=>true,
        	'plataforma_descripcion'=>'Plataformaen la creada para la medicion de Usabilidad en aplicaciones web de la Universidad Cundinamarca - Facatativa',
        	'plataforma_logo'=>'userDefault.png',
        	'plataforma_url'=>'www.Usabilidad-Web.com',
        	'plataforma_manual'=>'manual.pdf'
        	
        ]);
    }
}