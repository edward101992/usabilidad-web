<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    public function plataforma(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');

    }
}
