<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios', function (Blueprint $table) {

            $table->increments('id_convenio');
            $table->string('nombre');
            $table->string('id_area')->nullable();
            $table->string('id_coordinador')->nullable();
            $table->string('id_t_convenio')->nullable();
            $table->date('fecha_de_inicio')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->date('vigencia')->nullable();
            $table->string('objetivo')->nullable();
            $table->string('descripcion')->nullable();
      /*      $table->foreign('id_area')->references('id_area')->on('areas');
            $table->foreign('id_coordinador')->references('id_coordinador')->on('coordinadores');
            $table->foreign('id_t_convenio')->references('id_t_convenio')->on('tipos_convenios');*/

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

        Schema::drop('convenios');
    }


}
