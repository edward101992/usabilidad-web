<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlataformaEvaluador extends Model
{
    

    public function plataforma(){
    	
    	return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');

    }
}
