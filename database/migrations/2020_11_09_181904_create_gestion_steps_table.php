<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_steps', function (Blueprint $table) {
            $table->id();
            $table->string('idCredito', 20)->nullable(); //varchar(255)
            $table->string('ejecutivo', 100)->nullable();
            $table->unsignedInteger('codigo_id')->nullable();
            $table->unsignedInteger('resultado_id')->nullable();
            $table->string('telefono', 20)->nullable();
            $table->integer('tipo')->nullable();
            $table->integer('contacto')->nullable();
            $table->integer('parentesco')->nullable();
            $table->text('comentario')->nullable();
            $table->timestamps();

            $table->foreign('codigo_id')->references('id')->on('codigo_actions');
            $table->foreign('resultado_id')->references('id')->on('resultado_actions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestion_steps');
    }
}
