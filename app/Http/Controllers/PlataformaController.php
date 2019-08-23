<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlataformaController extends Controller
{
    public function agregaPlataforma(){
		return view('AdministradorViews.agregarPlataforma');
	}

	 public function editaPlataforma(){
		return view('AdministradorViews.editaPlataforma');
	}

	 public function listaPlataforma(){
		return view('AdministradorViews.listaPlataforma');
	}
}

