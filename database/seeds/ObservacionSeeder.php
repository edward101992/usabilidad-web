<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\Observacion;

class ObservacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$observacion=Observacion::create([
    		'observacion_descripcion'=>'La plataforma cuenta con varias funciones interesantes',
    		'plataforma_id'=>1
    	]);

    	$observacion=Observacion::create([
    		'observacion_descripcion'=>'La plataforma cuenta con varias funciones poco interesantes',
    		'plataforma_id'=>1
    	]);

    	$observacion=Observacion::create([
    		'observacion_descripcion'=>'Buen diseño',
    		'plataforma_id'=>1
    	]);

    	$observacion=Observacion::create([
    		'observacion_descripcion'=>'Funciono correctamente',
    		'plataforma_id'=>1
    	]);

    	$observacion=Observacion::create([
    		'observacion_descripcion'=>'Me gustaron los colores',
    		'plataforma_id'=>1
    	]);

    }
}
