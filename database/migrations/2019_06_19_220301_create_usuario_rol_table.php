<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            /*=============
            CREAR FOREIGN KEY DE LA TABLA USUARIO_ROL CON LA TABLA ROL
            =============== */
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id','fk_usuariorol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            
                /*=============
            CREAR FOREIGN KEY DE LA TABLA USUARIO_ROL CON LA TABLA USUARIO
            =============== */
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id','fk_usuariorol_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            

            $table->boolean('estado');            
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
        Schema::dropIfExists('usuario_rol');
    }
}
