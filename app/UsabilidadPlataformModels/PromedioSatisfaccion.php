<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class PromedioSatisfaccion extends Model
{

	
    public function plataformaEvaluador(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\PlataformaEvaluador');

    }
    
}
