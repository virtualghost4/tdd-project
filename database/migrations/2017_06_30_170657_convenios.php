<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Convenios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('vigencia');
            $table->string('objetivos');
            $table->string('area_id')->unsigned();
            $table->string('coordinador_id')->unsigned();
            $table->string('tipo_convenio_id')->unsigned();
            $table->string('descripcion');

            $table->foreign('area_id')->references('id')->on('area');
            $table->foreign('coordinador_id')->references('id')->on('coordinador');
            $table->foreign('tipo_convenio_id')->references('id')->on('tipo_convenio');


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
