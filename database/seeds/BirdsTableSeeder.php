<?php

use Illuminate\Database\Seeder;

class BirdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $rarity_id = \Birdwatcher\Rarity::where('rarity','=','Least concern')->pluck('id');
      DB::table('birds')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'image'=> 'https://www.allaboutbirds.org/guide/PHOTO/LARGE/REEG_glam.jpg',
      'name' => 'Reddish Egret',
      'rarity_id' => $rarity_id,
      'scientific_name' => 'Egretta rufescens',
      'natural_habitat' => 'Caribbean and Central America',
      'description' => 'A medium to large heron of shallow salt water, the Reddish Egret comes in a dark and a white form. It is a very active forager, often seen running, jumping, and spinning in its pursuit of fish.',
      ]);
      $rarity_id = \Birdwatcher\Rarity::where('rarity','=','Least concern')->pluck('id');
      DB::table('birds')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'image'=> 'https://www.allaboutbirds.org/guide/PHOTO/LARGE/hawkperson.jpg',
      'name' => 'White-throated Swift',
      'rarity_id' => $rarity_id,
      'scientific_name' => 'Aeronautes saxatalis',
      'natural_habitat' => 'North America',
      'description' => 'One of the fastest flying birds in North America, the White-throated Swift is a common sight in the canyons, foothills, and mountains of the American West.',
      ]);
      $rarity_id = \Birdwatcher\Rarity::where('rarity','=','Least concern')->pluck('id');
      DB::table('birds')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'image'=> 'https://www.allaboutbirds.org/guide/PHOTO/LARGE/painted.jpg',
      'name' => 'Painted Bunting',
      'rarity_id' => $rarity_id,
      'scientific_name' => 'Passerina ciris',
      'natural_habitat' => 'North and Central America',
      'description' => 'With their vivid fusion of blue, green, yellow, and red, male Painted Buntings seem to have flown straight out of a child’s coloring book. Females and immatures are a distinctive bright green with a pale eyering. These fairly common finches breed in the coastal Southeast and in the south-central U.S., where they often come to feeders. They are often caught and sold illegally as cage birds, particularly in Mexico and the Caribbean, a practice that puts pressure on their breeding populations.',
      ]);
      $rarity_id = \Birdwatcher\Rarity::where('rarity','=','Least concern')->pluck('id');
      DB::table('birds')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'image'=> 'https://www.allaboutbirds.org/guide/PHOTO/LARGE/wwcross.jpg',
      'name' => 'White-winged Crossbill',
      'rarity_id' => $rarity_id,
      'scientific_name' => 'Loxia leucoptera',
      'natural_habitat' => 'North America',
      'description' => 'A medium-sized finch of the boreal forest, the White-winged Crossbill is adapted for extracting seeds from the cones of coniferous trees. It moves large distances between years tracking the cone crop from place to place.',
      ]);
      $rarity_id = \Birdwatcher\Rarity::where('rarity','=','Least concern')->pluck('id');
      DB::table('birds')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'image'=> 'https://www.allaboutbirds.org/guide/PHOTO/LARGE/yellow_bellied_sapsucker_cameron_rognan_glamor.jpg',
      'name' => 'Yellow-bellied Sapsucker',
      'rarity_id' => $rarity_id,
      'scientific_name' => 'Sphyrapicus varius',
      'natural_habitat' => 'North America',
      'description' => 'Yellow-bellied Sapsuckers are fairly small woodpeckers with stout, straight bills. The long wings extend about halfway to the tip of the stiff, pointed tail at rest. Often, sapsuckers hold their crown feathers up to form a peak at the back of the head.',
      ]);
      $rarity_id = \Birdwatcher\Rarity::where('rarity','=','Least concern')->pluck('id');
      DB::table('birds')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'image'=> 'https://www.allaboutbirds.org/guide/PHOTO/LARGE/TBMU_glam.jpg',
      'name' => 'Thick-billed Murre',
      'rarity_id' => $rarity_id,
      'scientific_name' => 'Uria lomvia',
      'natural_habitat' => 'Arctic',
      'description' => 'A common bird of the far northern oceans, the Thick-billed Murre is found in Arctic waters all across the globe. It remains up to the limits of pack ice in winter, using its wings to swim underwater to find its fish and invertebrate prey.',
      ]);

    }
}
