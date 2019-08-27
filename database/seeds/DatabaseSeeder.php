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
        $this->call(RolesSeeder::class);        
        $this->call(PermisosSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(PlataformaSeeder::class);
    }
}
