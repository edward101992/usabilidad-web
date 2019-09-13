<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\RoleUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Image;

class UserController extends Controller
{

	public function configuracionCuenta(){
		return view('Usuario.configuracionUsuario');
	}

	public function listaUsuario(){

		$nombreRol = "Administrador";
		$nombrePag = "Usabilidad-Web";
		$roles=Role::all();
		$roleusers=RoleUser::all();
		$users=User::all();
		return view('AdministradorViews.listaUsuario', compact('roles','roleusers','users','nombreRol','nombrePag'));  
	}
	public function agregaUsuario(){
		return view('AdministradorViews.agregarUsuario');
	}

	public function editaUsuario(User $user){
	    $rol_user = RoleUser::where('user_id', Auth::user()->id)->value('role_id');
        $rol = Role::find($rol_user);
		return view('AdministradorViews.editarUsuario', compact('user','rol'));

	}

	public function insertarUsuario(){


		$datos = request()->validate([
			'name'=> 'required',
			'usuario_apellido'=> 'required',
			'usuario_documento'=> 'required|numeric',
			'usuario_telefono'=> 'numeric',
			'email'=> 'required|email|unique:users,email',
			'usuario_genero' => '',
			'usuario_estado' => '',
			'password'=> 'required|min:6',
			'usuario_imagen' => 'image',
		],[
			'name.required' => 'Camppo oblegato'

		]);


		$datos = request()->all();
		$ruta = public_path().'/imagenes/Usuarios/';
        $imagenOriginal = $datos['usuario_imagen'];
        $imagen = Image::make($imagenOriginal);
        //$temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
        $temp_name =  str_random(). '.' .$imagenOriginal->getClientOriginalExtension();
        $imagen->resize(300,300);
        $imagen->save($ruta . $temp_name, 100);
 
		
        $user = User::create([
            'name'=> $datos['nombre'],
            'usuario_apellido'=> $datos['usuario_apellido'],
            'usuario_documento'=> $datos['usuario_documento'],
            'usuario_telefono'=> $datos['usuario_telefono'],
            'email'=> $datos['email'],
            'usuario_genero' => $datos['usuario_genero'],
            'usuario_estado'=>$datos['usuario_estado'],
            'password'=>bcrypt($datos['password']),
            'usuario_imagen'=>$temp_name
        ]); 
        $role = Role::where('id', '=', $datos['role_id'])->first();
        $user->attachRole($role);
        return redirect()->route('usuario.lista');

	}
}


