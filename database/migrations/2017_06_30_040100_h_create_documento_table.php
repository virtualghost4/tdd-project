<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HCreateDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Documento', function (Blueprint $table) {
            $table->increments('id_documento');
            $table->integer('id_convenios')->unsigned();
            $table->date('fecha_firma');
            $table->date('fecha_decreto');
            $table->integer('nro_decreto');
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
        Schema::drop('Documento');
    }
}
