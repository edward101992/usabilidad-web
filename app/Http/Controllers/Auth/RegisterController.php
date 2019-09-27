<?php

namespace App\Http\Controllers\Auth;

use App\UsabilidadPlataformModels\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'usuario_apellido' => 'required|string|max:255',
            'usuario_documento' => 'required|string|min:9|unique:usuario',
            'usuario_telefono' => 'required|string|min:8',
            'email' => 'required|string|email|max:255|unique:usuario',
            'usuario_imagen' => 'string',
            'usuario_genero' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['nombre_usuario'],
            'usuario_apellido' => $data['apellido_usuario'],
            'usuario_documento' => $data['documento_usuario'],
            'usuario_telefono' => $data['telefono_usuario'],
            'email' => $data['email_usuario'],
            'usuario_imagen' => $data['imagen_usuario'],
            'usuario_genero' => $data['genero_usuario'],
            'password' => bcrypt($data['password_usuario']),

        ]);
    }
}
