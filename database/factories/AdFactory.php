<?php

use Faker\Generator as Faker;

$factory->define(App\Ad::class, function (Faker $faker) {
    return [
        "title" => $faker->company,
        "description" => $faker->text(),
        "date" => $faker->date(),
        "picture" => "ads\April2019\9Yra17GtutakLQZJXTNO.png",
        "created_at" => $faker->dateTime(),
        "updated_at" => $faker->dateTime(),
    ];
});
