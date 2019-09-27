<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class CalificacionVentana extends Model
{
	protected $table = 'calificacion_ventanas';
    public function ventana(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Ventana');

    }

    public function plataformaEvaluador(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\PlataformaEvaluador');

    }
}
