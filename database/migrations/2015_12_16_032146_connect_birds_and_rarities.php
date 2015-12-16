<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectBirdsAndRarities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('birds', function (Blueprint $table) {

            $table->integer('rarity_id')->unsigned();
            $table->foreign('rarity_id')->references('id')->on('rarities');

        });
    }

    public function down()
    {
        Schema::table('birds', function (Blueprint $table) {
            $table->dropForeign('birds_rarity_id_foreign');
            $table->dropColumn('rarity_id');
        });
    }
}



