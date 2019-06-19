<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
               /*=============
            CREAR FOREIGN KEY DE LA TABLA USUARIO_ROL CON LA TABLA ROL
            =============== */
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id','fk_permisoRol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            
                /*=============
            CREAR FOREIGN KEY DE LA TABLA USUARIO_ROL CON LA TABLA USUARIO
            =============== */
            $table->unsignedInteger('permiso_id');
            $table->foreign('permiso_id','fk_permisoRol_permiso')->references('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permiso_rol');
    }
}
