<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdsTable extends Migration
{

    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('birds', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->timestamps();
            //field for common name given to the bird 
            $table->string('name');
            //field for scientific name 
            $table->string('scientific_name');
            //location of natural habitat
            $table->string('natural_habitat');
            //number of birdwatchers that have seen the bird 
            $table->string('image');
            //a brief description of the bird 
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('birds');
    }
}
