<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UsersTableSeeder::class);
        $this->call(RarityTableSeeder::class);
        $this->call(BirdsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(BirdLocationTableSeeder::class);
        //$this->call(BirdUserTableSeeder::class);
        Model::reguard();
    }
}


