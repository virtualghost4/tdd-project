<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GCreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Actividades', function (Blueprint $table) {
            $table->increments('id_actividades');
            $table->integer('id_convenios')->unsigned();
            $table->integer('id_tipo_actividad')->unsigned();
            $table->mediumText('description');
            $table->enum('estado', ['revisado', 'no revisado']);
            $table->foreign('id_tipo_actividad')->references('id_tipo_actividad')->on('TipoActividad');
            $table->foreign('id_convenios')->references('id_convenios')->on('Convenios');
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
        Schema::drop('Actividades');
    }
}
