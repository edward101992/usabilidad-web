<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class CalificacionTarea extends Model
{
	protected $table = 'calificacion_tareas';

    public function tarea(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Tarea');
    }

    public function plataformaEvaluador(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\PlataformaEvaluador');

    }
}
