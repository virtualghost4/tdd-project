<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DOCUMENTO', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_convenios');
            $table->string('formato',20);
            $table->string('firma',20);
            $table->string('url');
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
        Schema::drop('DOCUMENTO');
    }
}
