<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConvenioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CONVENIO', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_area');
            $table->integer('id_coordinador');
            $table->string('id_t_convenio');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->string('vigencia');
            $table->string('objetivo');
            $table->string('descripcion');
            $table->foreign('id_area')->references('id')->on('area');
            $table->foreign('id_coordinador')->references('id')->on('coordinador');
            $table->foreign('id_t_convenio')->references('id')->on('tipo_convenio');
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
        Schema::drop('CONVENIO');
    }
}
