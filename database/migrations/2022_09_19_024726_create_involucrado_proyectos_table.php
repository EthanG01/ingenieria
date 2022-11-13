<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolucradoProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involucrado_proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('involucrados_id');
            $table->unsignedBigInteger('proyecto_id');
            $table->timestamps();
            $table->foreign('involucrados_id')->references('id')
    ->on('involucrados')->onDelete('cascade');

    $table->foreign('proyecto_id')->references('id')
    ->on('proyectos')->onDelete('cascade');
        });
    }
    
    


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('involucrado_proyectos');
    }
}
