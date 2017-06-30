<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FCreateConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Convenios', function (Blueprint $table) {
            $table->increments('id_convenios');
            $table->integer('id_area')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->integer('id_T_Convenio')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->mediumText('description');
            $table->foreign('id_T_Convenio')->references('id_T_Convenio')->on('TipoConvenio');
            $table->foreign('id_user')->references('id_usuario')->on('Usuarios');
            $table->foreign('id_area')->references('id_area')->on('Area');
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
        Schema::drop('Convenios');
    }
}
