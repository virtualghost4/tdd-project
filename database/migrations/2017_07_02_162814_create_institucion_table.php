<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionTable extends Migration
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
            $table->string('nombre');
            $table->string('tipo');
            $table->string('pais');
           
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

        Schema::drop('instituciones');
    }
}
