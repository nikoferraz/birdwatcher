<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Birdwatcher\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(Birdwatcher\Location::class, function (Faker\Generator $faker) {
    $county=$faker->cityPrefix." County";
    return [
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'zip_code'=>$faker->postcode, 
        'county'=>$county,
        'extra_description'=>$faker->sentence,
    ];
});

  

       