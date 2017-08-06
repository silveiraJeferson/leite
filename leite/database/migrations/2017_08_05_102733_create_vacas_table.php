<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacas', function($table) {

            $table->increments('id');
            $table->integer('id_produtor');
            $table->string('data_nascimento');            
            $table->string('raca');            
            $table->string('pai');            
            $table->string('mae');            
            $table->string('foto');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('vacas');
    }
}
