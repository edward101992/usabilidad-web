<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class PromedioEficacia extends Model
{
    public function plataformaUsuario(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\PlataformaUsuario');

    }
}
