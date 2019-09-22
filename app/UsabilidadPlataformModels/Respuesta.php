<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    public function pregunta(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Pregunta');
    }
}
