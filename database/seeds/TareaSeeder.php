<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\Tarea;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarea=Tarea::create([
        	'tarea_nombre' => 'Agregar Usuarios',
        	'tarea_descripcion' => 'Se agregan usuarios a la plataforma mediante un registro',
        	'tarea_numero_pasos' => 6,
        	'tarea_tiempo' => '22/07/11/00:05:00',
        	'plataforma_id' => 1   
        ]);

        $tarea=Tarea::create([
        	'tarea_nombre' => 'Eliminar Usuarios',
        	'tarea_descripcion' => 'Se eliminan usuarios de la plataforma',
        	'tarea_numero_pasos' => 3,
        	'tarea_tiempo' => '22/07/11/00:03:00',
        	'plataforma_id' => 1     
        ]);

        $tarea=Tarea::create([
        	'tarea_nombre' => 'Editar Usuarios',
        	'tarea_descripcion' => 'Se editan usuarios de la plataforma mediante un formulario',
        	'tarea_numero_pasos' => 4,
        	'tarea_tiempo' => '22/07/11/00:04:00',
        	'plataforma_id' => 1      
        ]);

        $tarea=Tarea::create([
        	'tarea_nombre' => 'Listar Usuarios',
        	'tarea_descripcion' => 'Se listan usuarios registrados mediante una tabla',
        	'tarea_numero_pasos' => 3,
        	'tarea_tiempo' => '22/07/11/00:04:00',
        	'plataforma_id' => 1      
        ]);

        $tarea=Tarea::create([
        	'tarea_nombre' => 'Inicio de Sesion',
        	'tarea_descripcion' => 'Se ingresa a la plataforma por medio de un inicio de sesion',
        	'tarea_numero_pasos' => 1,
        	'tarea_tiempo' => '22/07/11/00:01:00',
        	'plataforma_id' => 1      
        ]);

        $tarea=Tarea::create([
        	'tarea_nombre' => 'Registro de Usuario',
        	'tarea_descripcion' => 'Los usuarios podran registrarse mediante un formulario',
        	'tarea_numero_pasos' => 2,
        	'tarea_tiempo' => '22/07/11/00:10:00',
        	'plataforma_id' => 1      
        ]);
    }
}
   