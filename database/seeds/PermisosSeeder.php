<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		
 		$admin = Role::where('name', 'Administrador')->first();
 		$evaluador = Role::where('name', 'Evaluador')->first();;
 		$estudiante = Role::where('name', 'Estudiante')->first();
 		

   // Permiso de bienvenido evaluador
       $permiso = Permission::create([
        	'name'=>'bienvenido-evaluador',
        	'display_name'=>'mensaje',
        	'description'=>'mensaje de bienvenida evaluador'
        ]);
      		 $evaluador->attachPermission($permiso); 


    // Permiso de bienvenido administrador
        $permiso = Permission::create([
        	'name'=>'bienvenido-administrador',
        	'display_name'=>'mensaje',
        	'description'=>'mensaje de bienvenida administrador'
        ]);
       		$admin->attachPermission($permiso); 


    // Permiso de bienvenido estudiante
        $permiso = Permission::create([
        	'name'=>'bienvenido-estudiante',
        	'display_name'=>'mensaje',
        	'description'=>'mensaje de bienvenida estudiante'
        ]);
       		$estudiante->attachPermission($permiso); 


    // Permiso de crear usuarios
         $permiso = Permission::create([
            'name'=>'crear-usuario',
            'display_name'=>'Crear Usuarios',
            'description'=>'Permiso de crear usuarios'
         ]);
         $admin->attachPermission($permiso);  


    }
}

