<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlataformaEstudiante extends Model
{
    

    public function plataforma(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');

    }

    public function usuario(){

    	return $this->belongsTo('App\User');

    }
}
