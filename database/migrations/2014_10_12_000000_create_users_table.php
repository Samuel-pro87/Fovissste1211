<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //id Integer Usingned Increment
            $table->string('name', 150); //varchar(255)
            //$table->text('apellidos'); //Otra forma de declarar una variable tipo texto mayor de 255 caracteres
            $table->string('email')->unique();//para protejer a nivel de base de datos y debe ser único
            $table->timestamp('email_verified_at')->nullable(); //fecha de correos electronicos, NULLABLE puede quedar vacio
            $table->string('password'); // almacenar la contraseña
            $table->string('avatar')->nullable();
            $table->rememberToken(); // crea una columna varchar de tamaño 100.
            $table->timestamps(); // crea created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
