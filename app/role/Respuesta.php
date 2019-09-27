<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{

	protected $table = 'respuestas';
    public function pregunta(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Pregunta');
    
    }

    public function plataformaEvaluador(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\PlataformaEvaluador');
    }
}
