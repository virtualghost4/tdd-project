<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesconveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadesconvenios', function (Blueprint $table) {
            $table->integer('id_convenio')->unsigned();
            $table->integer('id_coordinador')->unsigned();
            $table->increments('id_actividad')->nullable();  
        
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('estado')->nullable();
            $table->string('nombre_actividad')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('vigente')->nullable();
           
            $table->foreign('id_coordinador')->references('id_coordinador')->on('coordinadores');
 
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
       Schema::drop('actividadesconvenios');
    }
}
