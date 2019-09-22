<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    public function encuestas(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Encuesta');

    }
}
