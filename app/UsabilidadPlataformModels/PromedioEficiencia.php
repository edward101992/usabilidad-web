<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class PromedioEficiencia extends Model
{
	
    public function plataformaEvaluador(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\PlataformaEvaluador');

    }
    
}
