<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    public function plataforma(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');

    }

    public function calificacionTareas(){

    	return $this->hasMany('App\UsabilidadPlataformModels\CalificacionTarea');
    }
}
