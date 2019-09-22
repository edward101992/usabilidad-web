<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Hipervinculo extends Model
{
    
	public function plataforma(){

		return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');
	}

}
