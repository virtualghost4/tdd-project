<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTieneInstitucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TIENE_INSTITUCION', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_convenios');
            $table->integer('id_institucion');
            $table->foreign('id_convenios')->refereces('id')->on('convenios');
            $table->foreign('id_institucion')->refereces('id')->on('institucion');
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
        Schema::drop('TIENE_INSTITUCION');
    }
}
