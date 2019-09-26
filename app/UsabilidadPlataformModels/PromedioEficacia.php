<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class PromedioEficacia extends Model
{
	protected $table = 'promedio_eficacia';
    public function plataformaEvaluador(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\PlataformaEvaluador');

    }
    
}
