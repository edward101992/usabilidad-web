<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Ventana extends Model
{
	protected $table = 'ventanas';
    public function plataforma(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');

    }

    public function calificacionVentanas(){

    	return $this->hasMany('App\UsabilidadPlataformModels\CalificacionVentana');

    }


}
