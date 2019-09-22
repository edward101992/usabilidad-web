<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Ventana extends Model
{
    public function plataforma(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');

    }
}
