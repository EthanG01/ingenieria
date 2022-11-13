<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_revistas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('editorial_id');
            $table->unsignedBigInteger('tipolibro_id');
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('etiqueta_id');
            $table->string('edicion');
            $table->string('titulo');
            $table->integer('cant_pag');
            $table->string('documentoLR');
            $table->date('fechaPublicacionLR');
            $table->timestamps();
            $table->foreign('etiqueta_id')->references('id')
            ->on('etiquetas')->onDelete('cascade');
            $table->foreign('editorial_id')->references('id')
            ->on('editorials')->onDelete('cascade');
              $table->foreign('tipolibro_id')->references('id')
            ->on('tipo_libros')->onDelete('cascade');
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
        Schema::dropIfExists('libro_revistas');
    }
}
