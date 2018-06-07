<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'image' => 'https://i.imgur.com/YSYOU4b.png',
        'length' => $faker->numberBetween(100, 140),
        'year' => $faker->numberBetween(1970, 2018)
    ];
});
