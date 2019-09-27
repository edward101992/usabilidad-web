<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Hipervinculo extends Model
{
    
    protected $table = 'hipervinculos';

	public function plataforma(){

		return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');
	}

}
