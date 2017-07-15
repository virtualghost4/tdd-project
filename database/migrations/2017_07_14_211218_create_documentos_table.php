<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id_documento');
            $table->integer('id_convenio')->unsigned();
            $table->date('fecha_firma');
            $table->date('fecha_decreto');
            $table->integer('nro_decreto');
            
            $table->foreign('id_convenio')->references('id_convenio')->on('convenios');

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
        Schema::drop('documentos');
    }
}