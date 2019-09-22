<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class CalificacionVentana extends Model
{
    public function ventana(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Ventana');

    }
}
