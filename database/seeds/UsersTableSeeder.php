<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
      'name' => 'Test_User',
      'email' => 'test@email.com',
      'password' => bcrypt('test'),
      'remember_token' => str_random(10),
      ]);
      
      factory('Birdwatcher\User',10)->create(); 
    }
}
