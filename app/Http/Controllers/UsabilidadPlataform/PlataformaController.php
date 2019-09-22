<?php

namespace App\Http\Controllers\UsabilidadPlataform;

use App\Plataform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use App\Http\Controllers\Controller;

class PlataformaController extends Controller
{
    public function agregaPlataforma(){
		return view('AdministradorViews.agregarPlataforma');
	}

	public function insertarPlataforma(){
		
		$datos=request()->all();
		$ruta = public_path().'/imagenes/Plataformas/';
        $imagenOriginal = $datos['logo_plataforma'];
        $imagen = Image::make($imagenOriginal);
        $temp_name =  str_random(). '.' .$imagenOriginal->getClientOriginalExtension();
        $imagen->resize(300,300);
        $imagen->save($ruta . $temp_name, 100);
		$plataforma=Plataform::create([
			'plataforma_nombre'=>$datos['nombre_plataforma'],
			'plataforma_fecha_creacion'=>$datos['fecha_creacion_plataforma'],
			'plataforma_estado'=>$datos['estado_plataforma'],
			'plataforma_descripcion'=>$datos['descripcion_plataforma'],
			'plataforma_url'=>$datos['url_plataforma']
			//'plataforma_logo'=>$temp_name
		]);
		return view('AdministradorViews.listaPlataforma');

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
		toastr()->info('User has been created!');
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

