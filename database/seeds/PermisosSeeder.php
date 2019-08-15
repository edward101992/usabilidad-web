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
 		


       $permiso = Permission::create([
        	'name'=>'bienvenido-evaluador',
        	'display_name'=>'mensaje',
        	'description'=>'mensaje de bienvenida evaluador'
        ]);
      		 $evaluador->attachPermission($permiso); 


        $permiso = Permission::create([
        	'name'=>'bienvenido-administrador',
        	'display_name'=>'mensaje',
        	'description'=>'mensaje de bienvenida administrador'
        ]);
       		$admin->attachPermission($permiso); 


        $permiso = Permission::create([
        	'name'=>'bienvenido-estudiante',
        	'display_name'=>'mensaje',
        	'description'=>'mensaje de bienvenida estudiante'
        ]);
       		$estudiante->attachPermission($permiso); 
    }
}

