<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoviDetalleTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fovi_detalle_telefonos', function (Blueprint $table) {
            $table->id();
            $table->string('rfc', 20)->nullable(); //varchar(255)
            $table->string('ejecutivo', 100)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->integer('tipo')->nullable();
            $table->integer('status')->nullable();
            $table->integer('extension')->nullable();
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
        Schema::dropIfExists('fovi_detalle_telefonos');
    }
}
