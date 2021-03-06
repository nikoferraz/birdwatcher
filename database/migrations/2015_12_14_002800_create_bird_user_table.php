<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bird_user', function (Blueprint $table) 
        {

            $table->increments('id');
            $table->timestamps();
            $table->integer('bird_id')->unsigned();
            $table->integer('user_id')->unsigned();
            # Make foreign keys
            $table->foreign('bird_id')->references('id')->on('birds');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bird_user');
    }
}
