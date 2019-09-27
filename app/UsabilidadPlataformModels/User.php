<?php

namespace App\UsabilidadPlataformModels;

use Illuminate\Notifications\Notifiable;
use App\Notifications\ReiniciarPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'usuario_apellido',
        'email',
        'password',
        'usuario_documento',
        'usuario_telefono',
        'usuario_imagen',
        'usuario_genero',
        'usuario_estado',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ReiniciarPasswordNotification($token));
    }


    public function plataformaEvaluadores(){

        return $this->hasMany('App\UsabilidadPlataformModels\PlataformaEvaluador');

    }


    public function plataformaEstudiantes(){

        return $this->hasMany('App\UsabilidadPlataformModels\PlataformaEstudiante');

    }
    
    public function genero(){

        return $this->belongsTo('App\UsabilidadPlataformModels\Genero');

    }
}
