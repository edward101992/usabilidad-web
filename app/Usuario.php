<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /**
     * 
     * 
     */
	protected $table = 'usuario';

	protected $filleable = [
		'usuario_password',
		'usuario_nombre',
		'usuario_apellido',
		'usuario_documento',
		'usuario_telefono',
		'usuario_email',
		'usuario_imagen',
		'usuario_genero',
		'usuario_estado',

	];

/**
 * $hidden oculta los valores
 * $casts hace una conversion de atributos
 * $visible atributos que queremos mostrar
 * @var [type]
 */
	  protected $hidden = [
        'usuario_password', 'remember_token',
    ];

}
