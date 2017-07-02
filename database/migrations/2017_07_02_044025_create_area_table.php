<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('area', function (Blueprint $table) {

            $table->increments('id_area');
            $table->string('nombre');
           
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

        Schema::drop('area');
    }

    

    
}
