<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ACreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('type', ['usuario', 'coordinador', 'administrador'])->default('usuario');
            $table->rememberToken();
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
        Schema::drop('Usuarios');
    }
}
