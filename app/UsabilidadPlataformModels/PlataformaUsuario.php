<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class PlataformaUsuario extends Model
{
    public function plataforma (){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');

    }

    public function usuario (){

    	return $this->belongsTo('App\User');

    }

    public function promediosEficacia(){

    	return $this->hasMany('App\UsabilidadPlataformModels\PromedioEficacia');

    }

}
