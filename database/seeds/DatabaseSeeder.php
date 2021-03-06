<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * truncateTables para eliminar solo la informacion sin necesidad de
         * borrar tambien las tablas
         */        
     // $this->call(UsersTableSeeder::class);
     // 

        $this->truncateTables([
            'plataforms',
            'users',
            'roles',
            'hipervinculos',
            'permissions',
            'permission_role',
            'role_user',
            'observaciones',
            'tareas',
            'plataforma_evaluador',
            'ventanas',
            'encuestas',
            'preguntas',
            'plataforma_estudiante',
            'generos',
            'calificacion_tareas',


        ]);

        $this->call(RolesSeeder::class);        
        $this->call(PermisosSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(PlataformaSeeder::class);
        $this->call(HipervinculoSeeder::class);
        $this->call(ObservacionSeeder::class);
        $this->call(TareaSeeder::class);
        $this->call(VentanaSeeder::class);
        $this->call(EncuestaSeeder::class);
        $this->call(PreguntaSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(PlataformaEstudianteSeeder::class);
        $this->call(PlataformaEvaluadorSeeder::class);
        $this->call(CalificacionTareaSeeder::class);

         

    }

        public function truncateTables(array $tables){
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            foreach ($tables as $table) {
                DB::table($table)->truncate();
            }
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        }

}
