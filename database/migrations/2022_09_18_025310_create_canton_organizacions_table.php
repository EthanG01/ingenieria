<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantonOrganizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canton_organizacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('canton_id');
            $table->unsignedBigInteger('organizacion_id');
            $table->timestamps();
            $table->string('direccion');
            /* $table->string('provinciaOrg'); */
            

            $table->foreign('canton_id')->references('id')
            ->on('cantons')->onDelete('cascade');

            $table->foreign('organizacion_id')->references('id')
            ->on('organizacions')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canton_organizacions');
    }
}
