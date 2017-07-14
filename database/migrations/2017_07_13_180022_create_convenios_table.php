<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveniosTable extends Migration
{
    
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios', function (Blueprint $table) {

            $table->increments('id_convenio');
            $table->integer('id_tipo_convenio')->unsigned();
            $table->integer('id_coordinador')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->integer('id_area')->unsigned();

            $table->string('nombre_convenio')->nullable();
            $table->date('fecha_de_inicio')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->date('fecha_firma')->nullable();
            $table->date('fecha_decreto')->nullable();
            $table->integer('nro_decreto')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('vigente')->nullable();
            $table->integer('vigencia')->nullable();
            
            $table->foreign('id_tipo_convenio')->references('id_tipo_convenio')->on('tiposconvenios');
            $table->foreign('id_coordinador')->references('id_coordinador')->on('coordinadores');
            $table->foreign('id_estado')->references('id_estado')->on('estados');
            $table->foreign('id_area')->references('id_area')->on('areas');

         
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



