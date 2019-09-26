<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class PlataformaEstudiante extends Model
{
    protected $table = 'plataforma_estudiante';

    public function plataforma(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');

    }

    public function usuario(){

    	return $this->belongsTo('App\User');

    }
}
