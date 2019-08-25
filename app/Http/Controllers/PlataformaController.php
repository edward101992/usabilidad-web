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

	public  function listaCuestionario(){
		return view('AdministradorViews.cuestionarioPlataforma');
	}

	public  function editaCuestionario(){
		return view('AdministradorViews.editarCuestionarioPlataforma');
	}

	public function asignarEvaluador(){
		return view('AdministradorViews.asignarEvaluadorPlataforma');
	}

	public function listaObservacion(){
		return view('AdministradorViews.listaObservacionPlataforma');
	}

	public function reportePlataforma(){
		return view('AdministradorViews.reportePlataforma');
	}

	public function reporteUsuario(){
		return view('AdministradorViews.reporteUsuario');
	}

	public function configuracionCuenta(){
		return view('AdministradorViews.reporteUsuario');
	}

	public function editarInicio(){
		return view('AdministradorViews.editarInicioPlataforma');
	}

	



}

