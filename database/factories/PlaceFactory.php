<?php

use Faker\Generator as Faker;


$factory->define(App\Place::class, function (Faker $faker) {
    return [
        "name" => $faker->streetName,
        "description" => $faker->text(),
        "latitude" => $faker->numberBetween(0, 180),
        "longitude" => $faker->numberBetween(0, 180),
        "picture" => "places/April2019/GacoyjXq6njZDWf9AJz8.png",
        "created_at" => $faker->dateTime(),
        "updated_at" => $faker->dateTime(),
    ];
});
