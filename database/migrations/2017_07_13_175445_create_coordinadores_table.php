<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinadores', function (Blueprint $table) {

            $table->increments('id_coordinador');
            $table->integer('id_institucion')->unsigned();

            $table->string('rut_coordinador')->nullable();
            $table->string('nombre_coordinador')->nullable();
         
            $table->date('fecha_de_inicio')->nullable();
            $table->date('fecha_termino')->nullable();

            $table->integer('vigencia')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('unidad_academica')->nullable();
            $table->string('email')->nullable();


         

            
         
            $table->foreign('id_institucion')->references('id_institucion')->on('instituciones');
          
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
        Schema::drop('coordinadores');
    }
}
