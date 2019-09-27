<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\UsabilidadPlataformModels\User;
use App\UsabilidadPlataformModels\Role;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', '=', 'administrador')->first();
        $evaluador = Role::where('name', '=', 'evaluador')->first();
        $estudiante =  Role::where('name', '=', 'estudiante')->first();

       $usuario= User::create([
        	'password'=>bcrypt('123'),
        	'name'=>'Edward',
        	'usuario_apellido'=>'Ramos',
        	'usuario_documento'=>'1070965614',
        	'usuario_telefono'=>'3125720193',
        	'email'=>'edwardconw@gmail.com',
        	'usuario_imagen'=>'userDefault.png',
        	'usuario_genero'=>'2',
        	'usuario_estado'=>true
        ]);
        $usuario->attachRole($admin);


        $usuario=  User::create([
        	'password'=>bcrypt('123'),
        	'name'=>'Juan',
        	'usuario_apellido'=>'Perez',
        	'usuario_documento'=>'1088888888',
        	'usuario_telefono'=>'3125720193',
        	'email'=>'edwardconw2@gmail.com',
        	'usuario_imagen'=>'userDefault.png',
        	'usuario_genero'=>'2',
        	'usuario_estado'=>true
        ]);
        $usuario->attachRole($evaluador);


        $usuario=  User::create([
        	'password'=>bcrypt('123'),
        	'name'=>'Maria',
        	'usuario_apellido'=>'Beltran',
        	'usuario_documento'=>'1099999999',
        	'usuario_telefono'=>'3125720193',
        	'email'=>'edwardconw3@gmail.com',
        	'usuario_imagen'=>'userDefault.png',
        	'usuario_genero'=>'1',
        	'usuario_estado'=>true
        ]);
        $usuario->attachRole($estudiante);

        $usuario=  User::create([
        	'password'=>bcrypt('123'),
        	'name'=>'Arturo',
        	'usuario_apellido'=>'Giron',
        	'usuario_documento'=>'1000000000',
        	'usuario_telefono'=>'3125720193',
        	'email'=>'edwardconw4@gmail.com',
        	'usuario_imagen'=>'userDefault.png',
        	'usuario_genero'=>'2',
        	'usuario_estado'=>false
        ]);
         $usuario->attachRole($admin);

         $usuario=  User::create([
            'password'=>bcrypt('123'),
            'name'=>'Maria',
            'usuario_apellido'=>'Perez',
            'usuario_documento'=>'100003000',
            'usuario_telefono'=>'3125720193',
            'email'=>'edwardconw5@gmail.com',
            'usuario_imagen'=>'rqKzA8nUufF72DyN.PNG',
            'usuario_genero'=>'1',
            'usuario_estado'=>false
        ]);
         $usuario->attachRole($admin);


         $usuario=  User::create([
            'password'=>bcrypt('123'),
            'name'=>'Pedro',
            'usuario_apellido'=>'Diamante',
            'usuario_documento'=>'100099999',
            'usuario_telefono'=>'3125720193',
            'email'=>'edwardconw6@gmail.com',
            'usuario_imagen'=>'userDefault.png',
            'usuario_genero'=>'2',
            'usuario_estado'=>true
        ]);
        $usuario->attachRole($evaluador);


        $usuario=  User::create([
            'password'=>bcrypt('123'),
            'name'=>'Miguel',
            'usuario_apellido'=>'Pote',
            'usuario_documento'=>'102222222',
            'usuario_telefono'=>'3125720193',
            'email'=>'edwardconw7@gmail.com',
            'usuario_imagen'=>'userDefault.png',
            'usuario_genero'=>'2',
            'usuario_estado'=>true
        ]);
        $usuario->attachRole($estudiante);
    }
}

