<?php

use Illuminate\Database\Seeder;
use App\Models\Permiso;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* INVOCAMOS AL SEEDER PARA QUE LLENE LA TABLA, COMO SEGUNDO PARAMETRO INGRESAMOS LA CANTIDAD
        DE FILAS A LLENAR CON DATOS ALEATORIOS*/
       factory(Permiso::class,10)->create();
    }
}
