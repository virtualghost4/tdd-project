<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInstitucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INSTITUCION', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_t_institucion');
            $table->foreign('id_t_institucion')->references('id')->on('tipo_institucion');
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
        Schema::drop('INSTITUCION');
    }
}
