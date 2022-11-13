<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('indicador_id');
            $table->unsignedBigInteger('tipoarticulos_id');
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('etiqueta_id');
            $table->string('nombreArt');
            $table->text('descripcionArt');
           
            $table->string('doi');
            $table->string('documentoArt');
            $table->date('fechaPublicacionArt');
            $table->timestamps();
            $table->foreign('etiqueta_id')->references('id')
            ->on('etiquetas')->onDelete('cascade');
            $table->foreign('indicador_id')->references('id')
            ->on('indicadors')->onDelete('cascade');
              $table->foreign('tipoarticulos_id')->references('id')
            ->on('tipo_articulos')->onDelete('cascade');
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
        Schema::dropIfExists('articulos');
    }
}
