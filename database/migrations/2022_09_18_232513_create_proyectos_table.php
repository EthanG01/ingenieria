<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('canton_id');
            $table->string('nombreProyecto');
            // [$table->string('provinciaProyecto');]
            // $table->string('imagen');
            $table->text('descripcionProyecto');
            $table->date('fechaInicial');
            $table->date('fechaFinalizacion');
            $table->timestamps(); 
            $table->foreign('categoria_id')->references('id')
            ->on('categorias')->onDelete('cascade');
            $table->foreign('canton_id')->references('id')
            ->on('cantons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
