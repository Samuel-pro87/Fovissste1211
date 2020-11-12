<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadoActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_actions', function (Blueprint $table) {
            $table->id();
            $table->string('codigoAccion', 5)->nullable(); //varchar(255)
            $table->string('estatus', 150)->nullable();
            $table->unsignedInteger('codigo_id')->nullable();
            $table->timestamps();

            $table->foreign('codigo_id')->references('id')->on('codigo_actions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultado_actions');
    }
}
