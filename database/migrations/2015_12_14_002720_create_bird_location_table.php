<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bird_location', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->integer('bird_id')->unsigned();
            $table->integer('location_id')->unsigned();
            # Make foreign keys
            $table->foreign('bird_id')->references('id')->on('birds');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bird_location');
    }
}
