<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroPrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamo', function (Blueprint $table) {
            $table->bigIncrements('id');
            /*================= 
            CREAR FOREIGN KEYS
            =================*/
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id','fk_libroPrestamo_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            //$table->foreign('permiso_id','fk_permisoRol_permiso')->references('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('libro_id');
            $table->foreign('libro_id','fk_libroPrestamo_libro')->references('id')->on('libro')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_prestamo');
            $table->string('prestado_a',100);
            $table->boolean('estado');
            $table->date('fecha_devolucion')->nullable();
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
        Schema::dropIfExists('libro_prestamo');
    }
}