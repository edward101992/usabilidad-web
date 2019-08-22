<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\RoleUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function listaUsuario(){

		$nombreRol = "Administrador";
		$nombrePag = "Usabilidad-Web";
		$roles=Role::all();
		$roleusers=RoleUser::all();
		$users=User::all();
		return view('Usuario.listaUsuario', compact('roles','roleusers','users','nombreRol','nombrePag'));  
	}
	public function agregaUsuario(){
		return view('Usuario.agregarUsuario');
	}

	public function insertarUsuario(){


		  $datos = request()->all();
        $user = User::create([
            'name'=> $datos['nombre'],
            'usuario_apellido'=> $datos['usuario_apellido'],
            'usuario_documento'=> $datos['usuario_documento'],
            'usuario_telefono'=> $datos['usuario_telefono'],
            'email'=> $datos['email'],
            'usuario_genero' => $datos['usuario_genero'],
            'usuario_estado'=>$datos['usuario_estado'],
            'password'=>bcrypt($datos['password'])
        ]); 
        $role = Role::where('id', '=', $datos['role_id'])->first();
        $user->attachRole($role);
        return redirect()->route('usuario.lista');

	}
}


