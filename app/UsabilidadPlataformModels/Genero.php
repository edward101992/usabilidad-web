<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    public function usuarios(){

    	return $this->hasMany('App\UsabilidadPlataformModels\User');

    }

}


