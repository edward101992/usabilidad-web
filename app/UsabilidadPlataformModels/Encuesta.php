<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
	protected $table = 'encuestas';
    public function preguntas(){

    	return $this->hasMany('App\UsabilidadPlataformModels\Pregunta');

    }
}
