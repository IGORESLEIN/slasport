<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDescensos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descensos', function (Blueprint $table) {
     
            $table->increments('id_descenso')->unsigned();    
            $table->integer('id_carrera')->unsigned();
            $table->foreign('id_carrera')
                  ->references('id_carrera')->on('carrera')
                  ->onDelete('cascade');
            $table->integer('id_piraguista')->unsigned();
            $table->foreign('id_piraguista')
                  ->references('id_piraguista')->on('piraguistas')
                  ->onDelete('cascade');
            $table->time('tiempo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('descensos');
    }
}
