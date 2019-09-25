<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlataformaEstudiante extends Model
{
    

    public funtion plataforma(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');

    }
}
