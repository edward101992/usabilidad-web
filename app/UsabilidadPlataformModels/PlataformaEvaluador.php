<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Database\Eloquent\Model;

class PlataformaEvaluador extends Model
{
    
    protected $table = 'plataforma_evaluador';
    
    public function plataforma(){
    	
    	return $this->belongsTo('App\UsabilidadPlataformModels\Plataform');

    }

    public function usuario(){

    	return $this->belongsTo('App\UsabilidadPlataformModels\User');

    }

    public function promediosSatisfaccion(){

    	return $this->hasMany('App\UsabilidadPlataformModels\PromedioSatisfaccion');

    }

    public function promediosEficacia(){

    	return $this->hasMany('App\UsabilidadPlataformModels\PromedioEficacia');

    }

    public function promediosEficiencia(){

    	return $this->hasMany('App\UsabilidadPlataformModels\PromedioEficiencia');

    }

    public function calificacionesTarea(){

    	return $this->hasMany('App\UsabilidadPlataformModels\CalificacionTarea');

    }

    public function respuestas(){

    	return $this->hasMany('App\UsabilidadPlataformModels\Respuesta');

    }

    public function calificacionesVentana(){

    	return $this->hasMany('App\UsabilidadPlataformModels\CalificacionVentana');

    }


}
