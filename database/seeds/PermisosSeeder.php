<?php

use Illuminate\Database\Seeder;
use App\UsabilidadPlataformModels\Permission;
use App\UsabilidadPlataformModels\Role;

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
       


        /**
         *************************************************************************
         *********PERMISOS DE ADMINISTRADOR***************************************
         ************************************************************************* 
         */


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

        // Permiso Inicio Ver Usuarios
        $permiso = Permission::create([
            'name'=>'ver-usuario',
            'display_name'=>'Usuarios',
            'description'=>'Permiso de ver usuarios'
        ]);
        $admin->attachPermission($permiso);

        // Permiso Editar Usuarios     
        $permiso = Permission::create([
            'name'=>'editar-usuario',
            'display_name'=>'Editar Usuario',
            'description'=>'Permiso de editar usuarios'
        ]);
        $admin->attachPermission($permiso); 

        // Permiso Deshabilitar Usuarios     
        $permiso = Permission::create([
            'name'=>'deshabilitar-usuario',
            'display_name'=>'Deshabilitar Usuario',
            'description'=>'Permiso de deshabilitar usuarios'
        ]);
        $admin->attachPermission($permiso); 
        
        // Permiso Crear plataformas     
        $permiso = Permission::create([
            'name'=>'crear-plataforma',
            'display_name'=>'Crear Plataforma',
            'description'=>'Permiso de crear plataforma'
        ]);
        $admin->attachPermission($permiso); 

        //Permiso de ver plataforma   
        $permiso = Permission::create([
            'name' => 'ver-plataforma',
            'display_name' => 'Ver Plataformas',
            'description' => 'Permiso de ver plataformas'
        ]);
        $admin->attachPermission($permiso);

        // Permiso de editar Plataforma
        $permiso = Permission::create([
            'name'=>'editar-plataforma',
            'display_name'=>'Editar Plataforma',
            'description'=>'permiso de editar plataforma'
        ]);
        $admin->attachPermission($permiso);

        //Permiso de deshabilitar Plataforma
        $permiso = Permission::create([
            'name' => 'deshabilitar-plataforma',
            'display_name' => 'Deshabilitar Plataforma',
            'description' => 'permiso de deshabilitar plataforma'
        ]);
        $admin->attachPermission($permiso);

        //Permiso de Crear preguntas
        $permiso = Permission::create([
            'name' => 'crear-pregunta',
            'display_name' => 'Crear Pregunta',
            'description' => 'permiso de crear pregunta'
        ]);
        $admin->attachPermission($permiso);

        //Permiso de Ver preguntas
        $permiso = Permission::create([
            'name' => 'ver-pregunta',
            'display_name' => 'Ver Pregunta',
            'description' => 'permiso de ver pregunta'
        ]);
        $admin->attachPermission($permiso);

        //Permiso de Editar preguntas
        $permiso = Permission::create([
            'name' => 'editar-pregunta',
            'display_name' => 'Editar Pregunta',
            'description' => 'permiso de editar pregunta'
        ]);
        $admin->attachPermission($permiso);

        //Permiso de Deshabilitar preguntas
        $permiso = Permission::create([
            'name' => 'deshabilitar-pregunta',
            'display_name' => 'Deshabilitar Pregunta',
            'description' => 'permiso de deshabilitar pregunta'
        ]);
        $admin->attachPermission($permiso);

        //Permiso de Eliminar Observacion
        $permiso=Permission::create([
            'name' => 'eliminar-observacion',
            'display_name' => 'Eliminar Observacion',
            'description' => 'permiso de eliminar observacion'
        ]);
        $admin->attachPermission($permiso);

        //Permiso asignar Evaluador
        $permiso=Permission::create([
            'name' => 'asignar-evaluador',
            'display_name' => 'Afignar Evaluador',
            'description' => 'permiso de asignar evaluador'
        ]);
        $admin->attachPermission($permiso);

        //Permiso Modificar Bienvenido
        $permiso = Permission::create([
            'name' => 'modificar-bienvenido',
            'display_name' => 'Modificar Bienvenido',
            'description' => 'permiso de modificar bienvenido'
        ]);
        $admin->attachPermission($permiso);

         /**
         *************************************************************************
         *********PERMISOS DE EVALUADOR*******************************************
         ************************************************************************* 
         */
         
         //Permiso Navegar Plataforma
         $permiso = Permission::create([
            'name' => 'navegar-plataforma',
            'display_name' => 'Navegar Plataforma',
            'description' => 'permiso de navegar plataforma'
        ]);
         $estudiante->attachPermission($permiso);

         //Permiso Llenar encuest
         $permiso = Permission::create([
            'name' => 'llenar-encuesta',
            'display_name' => 'Llenar Encuesta',
            'description' => 'permiso de llenar encuesta'
        ]);
         $evaluador->attachPermission($permiso);

         /**
         *************************************************************************
         *********PERMISOS DE ESTUDIANTE******************************************
         ************************************************************************* 
         */
         
        //Permiso Agregar Tarea
         $permiso = Permission::create([
            'name' => 'crear-tarea',
            'display_name' => 'Crear Tarea',
            'description' => 'permiso de crear Tarea'
        ]);
         $estudiante->attachPermission($permiso);


         /**
         *************************************************************************
         *********PERMISOS COMPARTIDOS********************************************
         ************************************************************************* 
         */
         
        //Permiso de Registro
         $permiso = Permission::create([
            'name' => 'registarse',
            'display_name' => 'Registro',
            'description' => 'permiso de registrarse'
        ]);
         $admin->attachPermission($permiso);
         $estudiante->attachPermission($permiso);
         $evaluador->attachPermission($permiso);

         //Permiso de ver observaciones
         $permiso = Permission::create([
            'name' => 'ver-observaciones',
            'display_name' => 'Ver Observaciones',
            'description' => 'permiso de ver observaciones'
        ]);
         $admin->attachPermission($permiso);
         $estudiante->attachPermission($permiso);

        //Permiso de hacer observacion
         $permiso=Permission::create([
            'name' => 'hacer-observacion',
            'display_name' => 'Hacer Observacion',
            'description' => 'permiso de hacer observacion'
        ]);
         $evaluador->attachPermission($permiso);
         $admin->attachPermission($permiso);

        //Permiso de ver Reporte
         $permiso=Permission::create([
            'name' => 'ver-reporte',
            'display_name' => 'Ver Reporte',
            'description' => 'permiso de ver reportes'
        ]);
         $admin->attachPermission($permiso);
         $estudiante->attachPermission($permiso);
         

     }
 }

