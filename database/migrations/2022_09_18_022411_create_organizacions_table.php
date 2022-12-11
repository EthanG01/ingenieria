<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_organizacion_id');
            $table->string('nombreOrganizacion');
            $table->string('fotoOrganizacion');
            $table->timestamps();
            $table->foreign('tipo_organizacion_id')->references('id')
            ->on('tipo_organizacions')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizacions');
    }
}
