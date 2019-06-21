<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $rol=[
          'administrador',
          'editor',
          'supervisor'
      ];

      foreach ($rol as $key => $value) {
        DB::table('rol')->insert(['nombre'=>$value, 'created_at'=>Carbon::now()->format('y-m-d H:i:s')]);
      }
    }
}
