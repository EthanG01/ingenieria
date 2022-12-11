<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolucradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involucrados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('canton_organizacion_id');
            $table->unsignedBigInteger('implicacion_id');
            $table->text('descripcionInvolucrado');
            $table->timestamps();
            $table->foreign('persona_id')->references('id')
            ->on('personas')->onDelete('cascade');
              $table->foreign('canton_organizacion_id')->references('id')
            ->on('canton_organizacions')->onDelete('cascade');
            $table->foreign('implicacion_id')->references('id')
            ->on('implicacions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('involucrados');
    }
}
