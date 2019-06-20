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
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id','fk_libroPrestamo_usuario')->references('id')->on('usuario')->onUpdate('restrict')->onDelete('restrict');
            $table->unsignedBigInteger('libro_id');
            $table->foreign('libro_id','fk_libroPrestamo_libro')->references('id')->on('libro')->onUpdate('restrict')->onDelete('restrict');
            $table->date('Fecha_prestamo');
            $table->string('prestado_a', 100);
            $table->tinyInteger('estado');
            $table->date('fecha_devolucion');
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
