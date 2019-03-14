<?php

use Faker\Generator as Faker;

$factory->define(App\Partner::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'description' => $faker->text($maxNbChars = 200),
        'adresse' => $faker->streetAddress,
        'ville' => $faker->city,
        'code_postal' => $faker->postcode,
        'latitude' => $faker->latitude($min = -90, $max = 90),
        'longitude' => $faker->longitude($min = -180, $max = 180),
        'category_id' => '2',
    ];
});
