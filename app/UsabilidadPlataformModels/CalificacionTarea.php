<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class CalificacionTarea extends Model
{
    public function tarea(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Tarea');
    }
}
