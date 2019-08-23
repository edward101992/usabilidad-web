<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\RoleUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
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


