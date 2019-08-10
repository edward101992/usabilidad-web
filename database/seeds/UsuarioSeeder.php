<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
        	'usuario_password'=>bcrypt('123'),
        	'usuario_nombre'=>'Edward',
        	'usuario_apellido'=>'Ramos',
        	'usuario_documento'=>bcrypt('1070965614'),
        	'usuario_telefono'=>'3125720193',
        	'usuario_email'=>'edwardconw1@gmail.com',
        	'usuario_imagen'=>'public/imagenes/userDefault.png',
        	'usuario_genero'=>'Masculino',
        	'usuario_estado'=>true
        ]);
          Usuario::create([
        	'usuario_password'=>bcrypt('123'),
        	'usuario_nombre'=>'Juan',
        	'usuario_apellido'=>'Perez',
        	'usuario_documento'=>bcrypt('108888888'),
        	'usuario_telefono'=>'3125720193',
        	'usuario_email'=>'edwardconw2@gmail.com',
        	'usuario_imagen'=>'public/imagenes/userDefault.png',
        	'usuario_genero'=>'Otro',
        	'usuario_estado'=>true
        ]);
            Usuario::create([
        	'usuario_password'=>bcrypt('123'),
        	'usuario_nombre'=>'Maria',
        	'usuario_apellido'=>'Beltran',
        	'usuario_documento'=>bcrypt('1099999999'),
        	'usuario_telefono'=>'3125720193',
        	'usuario_email'=>'edwardconw3@gmail.com',
        	'usuario_imagen'=>'public/imagenes/userDefault.png',
        	'usuario_genero'=>'Femenino',
        	'usuario_estado'=>true
        ]);
              Usuario::create([
        	'usuario_password'=>bcrypt('123'),
        	'usuario_nombre'=>'Arturo',
        	'usuario_apellido'=>'Giron',
        	'usuario_documento'=>bcrypt('1000000000'),
        	'usuario_telefono'=>'3125720193',
        	'usuario_email'=>'edwardconw4@gmail.com',
        	'usuario_imagen'=>'public/imagenes/userDefault.png',
        	'usuario_genero'=>'Masculino',
        	'usuario_estado'=>false
        ]);
              


    }
}

