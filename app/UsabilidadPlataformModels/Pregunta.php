<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    public function encuesta(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Encuesta');

    }

    public function respuestas(){

    	return $this->hasMany('App\UsabilidadPlataformModels\Respuesta');

    }
}
