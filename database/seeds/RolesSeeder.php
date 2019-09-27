<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		

        Role::create([
        	'name'=>'administrador',
        	'display_name'=>'Administrador',
        	'description'=>'Usuario que administra la plataforma'
        ]);

         Role::create([
        	'name'=>'estudiante',
        	'display_name'=>'Estudiante',
        	'description'=>'Usuario que recibe informes de la plataforma'
        ]);

          Role::create([
        	'name'=>'evaluador',
        	'display_name'=>'Evaluador',
        	'description'=>'Usuario que evalua las plataformas'
        ]);

    }
}
