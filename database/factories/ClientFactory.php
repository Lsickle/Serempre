<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use App\City;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'city_id' => $faker->
        numberBetween(1, City::count()),
    ];
});
