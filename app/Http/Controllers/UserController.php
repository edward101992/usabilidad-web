<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\RoleUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listaUsuario(){
    	$nombre=
    	$roles=Role::all();
    	$roleusers=RoleUser::all();
    	$users=User::all();
    	return view('Usuario.listaUsuario', compact('roles','roleusers','users'));
    }

    
}
