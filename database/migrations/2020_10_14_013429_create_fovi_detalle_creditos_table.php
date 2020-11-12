<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoviDetalleCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fovi_detalle_creditos', function (Blueprint $table) {
            $table->id();
            $table->string('idCredito', 20)->nullable(); //varchar(255)
            $table->string('rfc', 20)->nullable(); //varchar(255)
            $table->string('curp', 18)->nullable(); //varchar(255)
            $table->string('nombre', 100)->nullable(); //varchar(255)
            $table->string('estatusLaboral', 100)->nullable(); //varchar(255)
            $table->text('calle')->nullable(); //varchar(255)
            $table->string('colonia')->nullable(); //varchar(255)
            $table->string('cp', 60)->nullable(); //varchar(255)
            $table->string('mora', 100)->nullable(); //varchar(255)
            $table->string('morosidad', 100)->nullable(); //varchar(255)
            $table->double('aduedoVencido')->nullable();//doueble presicion
            $table->timestamp('fechaCredito')->nullable();
            $table->double('montoInicial')->nullable();
            $table->double('saldoCredito')->nullable();
            $table->timestamp('fechaAsignacion')->nullable();
            $table->string('ejecutivo', 100)->nullable(); //varchar(255)
            $table->integer('digitoVerificador')->nullable();
            $table->string('estatus', 50)->nullable();
            $table->string('segmento', 50)->nullable();
            $table->string('telefono1', 20)->nullable();
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
        Schema::dropIfExists('fovi_detalle_creditos');
    }
}
