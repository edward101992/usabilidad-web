<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Plataform extends Model
{
	use Notifiable;
/**
      protected $fillable = [
        'plataforma_nombre', 
        'plataforma_fecha_creacion',
        'plataforma_estado',
        'plataforma_descripcion',
        'plataforma_url',
        'plataforma_logo',
        'plataforma_manual',
       
    ];
*/
    protected $table = 'plataforms';
    public function hipervinculos(){
       
        return $this->hasMany('App\UsabilidadPlataformModels\Hipervinculo');
   
    }

    public function observaciones(){

        return $this->hasMany('App\UsabilidadPlataformModels\Observacion');

    }

    public function tareas(){

        return $this->hasMany('App\UsabilidadPlataformModels\Tarea');

    }


    public function plataformaEvaluadores(){

        return $this->hasMany('App\UsabilidadPlataformModels\PlataformaEvaluador');

    }


    public function plataformaEstudiantes(){

        return $this->hasMany('App\UsabilidadPlataformModels\PlataformaEstudiante');

    }

    public function ventanas(){

        return $this->hasMany('App\UsabilidadPlataformModels\Vantana');

    }

}
