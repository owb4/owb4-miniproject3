<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'model' => $faker->firstName,
        'make' => $faker->randomElement($array = array ('Ford','Honda','Toyota')),
        'year' => $faker->year
    ];
});
