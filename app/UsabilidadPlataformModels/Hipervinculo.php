<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Hipervinculo extends Model
{
    
	public function Plataform(){
		
		$this->belongsTo('App\UsabilidadPlataformModels\Plataform');
	}

}
