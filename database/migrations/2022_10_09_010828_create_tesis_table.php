<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tesis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrera_id');
            $table->unsignedBigInteger('tipotesis_id');
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('etiqueta_id');
            $table->string('nombreTes');
            $table->text('descripcionTes');
       
            $table->string('documentoTes');
            $table->date('fechaPublicacionTes');
            $table->timestamps();
            $table->foreign('etiqueta_id')->references('id')
            ->on('etiquetas')->onDelete('cascade');
            $table->foreign('carrera_id')->references('id')
            ->on('carreras')->onDelete('cascade');
              $table->foreign('tipotesis_id')->references('id')
            ->on('tipo_tesis')->onDelete('cascade');
            $table->foreign('autor_id')->references('id')
            ->on('autors')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tesis');
    }
}
