<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ECreateTipoInstitucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TipoInstitucion', function (Blueprint $table) {
            $table->increments('id_tipo_institucion');
            $table->string('nombre_T_institucion');
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
        Schema::drop('TipoInstitucion');
    }
}
