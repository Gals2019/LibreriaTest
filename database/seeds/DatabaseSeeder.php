<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*======== TRUNCAMOS LAS TABLAS PARA QUE LOS SEEDERS NO CREEN DUPLICADO DE LOS DATOS EN 
        DIFERENTES TABLAS QUE TENGAN COLUMNAS UNIQUE */

        $this->truncateTablas(['rol','permiso']);

        /*==========
        AHORA LLAMAMOS A LA CLASE PARA QUE HAGA LOS SEEDERS
        ============ */

        $this->call(TablaRolSeeder::class);
        $this->call(TablaPermisoSeeder::class);
    }

    protected function truncateTablas(array $tablas){
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();

        }
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    }
}
