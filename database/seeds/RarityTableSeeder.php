<?php

use Illuminate\Database\Seeder;

class RarityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('rarities')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
      'rarity' => 'Extinct',
      'rarity_acronym' =>'EX',
      ]);
      DB::table('rarities')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rarity' => 'Extinct in the wild',
      'rarity_acronym' =>'EW',
      ]);
      DB::table('rarities')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
      'rarity' => 'Critically endangered',
      'rarity_acronym' =>'CR',
      ]);
      DB::table('rarities')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
      'rarity' => 'Endangered',
      'rarity_acronym' =>'EN',
      ]);
      DB::table('rarities')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rarity' => 'Vulnerable',
      'rarity_acronym' =>'VU',
      ]);
      DB::table('rarities')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rarity' => 'Near threatened',
      'rarity_acronym' =>'NT',
      ]);
      DB::table('rarities')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rarity' => 'Least concern',
      'rarity_acronym' =>'LC',
      ]);
      DB::table('rarities')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rarity' => 'Data deficient',
      'rarity_acronym' =>'DD',
      ]);
      DB::table('rarities')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'rarity' => 'Not evaluated',
      'rarity_acronym' =>'NE',
      ]);
    }
}


