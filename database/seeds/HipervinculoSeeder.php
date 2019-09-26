<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\Hipervinculo;
use App\UsabilidadPlataformModels\Plataform;

class HipervinculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$plataforma = Plataform::where('plataforma_nombre', '=', 'Usabilidad-Web')->first();
    	$hipervinculo=Hipervinculo::create([
    		'hipervinculo_url'=>'https://styde.net/insercion-de-datos-con-los-seeders-de-laravel/',
    		'hipervinculo_carga'=>true,
    		'plataforma_id'=>1

    	]);

    	$hipervinculo=Hipervinculo::create([
    		'hipervinculo_url'=>'https://github.com/edward101992/usabilidad-web/graphs/contributors',
    		'hipervinculo_carga'=>false,
    		'plataforma_id'=>1

    	]);
        
        $hipervinculo=Hipervinculo::create([
    		'hipervinculo_url'=>'https://codeday.me/es/qa/20190503/630617.html',
    		'hipervinculo_carga'=>true,
    		'plataforma_id'=>1

    	]);
        
        $hipervinculo=Hipervinculo::create([
    		'hipervinculo_url'=>'https://www.youtube.com/watch?v=RnRwfEIWy1E',
    		'hipervinculo_carga'=>true,
    		'plataforma_id'=>1

    	]);
        
        $hipervinculo=Hipervinculo::create([
    		'hipervinculo_url'=>'https://www.cinecalidad.to',
    		'hipervinculo_carga'=>true,
    		'plataforma_id'=>1

    	]);
        
        $hipervinculo=Hipervinculo::create([
    		'hipervinculo_url'=>'http://gnula.nu',
    		'hipervinculo_carga'=>false,
    		'plataforma_id'=>1
    	]);
        
        
    }
}
