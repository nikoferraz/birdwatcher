<?php

use Illuminate\Database\Seeder;

class BirdUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \Birdwatcher\User::all(); 

        foreach($users as $name => $birds) {

            $user= \Birdwatcher\User::where('name','like',$name)->first();

            foreach($birds as $birdName) {
                $bird = \Birdwatcher\Bird::where('name','LIKE',$birdName)->first();
                $user->birds()->save($bird);
            }
            
        }
    }
}
