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
            $table->string('nombre_convenio')->nullable();
            $table->string('tipo_convenio')->nullable();
            $table->string('pais');
            $table->integer('id_area')->unsigned();
            $table->date('fecha_de_inicio')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->string('estado')->nullable();
            $table->date('fecha_firma')->nullable();
            $table->date('fecha_decreto')->nullable();
            $table->integer('nro_decreto')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('nombre_coordinador')->nullable();
            $table->string('objetivo')->nullable();
            $table->string('m_colaboracion')->nullable();
            $table->string('nombre_institucion')->nullable();
            $table->string('actividades')->nullable();

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



