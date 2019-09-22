<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Plataform extends Model
{
	use Notifiable;

      protected $fillable = [
        'plataforma_nombre', 
        'plataforma_fecha_creacion',
        'plataforma_estado',
        'plataforma_descripcion',
        'plataforma_url',
        'plataforma_logo',
        'plataforma_manual',
       
    ];
}
