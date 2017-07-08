<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ICreateInstitucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Institucion', function (Blueprint $table) {
            $table->increments('id_institucion');
            $table->string('pais');
            $table->integer('id_convenios')->unsigned();
            $table->integer('id_tipo_institucion')->unsigned();
            $table->foreign('id_tipo_institucion')->references('id_tipo_institucion')->on('TipoInstitucion');
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
        Schema::drop('Institucion');
    }
}
