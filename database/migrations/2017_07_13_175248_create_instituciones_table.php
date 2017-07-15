<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {

            $table->increments('id_institucion');
            $table->string('nombre_institucion')->nullable();
            $table->string('pais')->nullable();
            $table->string('vigente')->nullable();
            $table->string('id_internacional')->nullable();
            $table->string('rut_institucion')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('link_institucion')->nullable();
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
            Schema::drop('instituciones');
    }
}
