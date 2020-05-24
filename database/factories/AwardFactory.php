<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Award;
use Faker\Generator as Faker;

$factory->define(Award::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'type' =>  substr($faker->sentence(2), 0, -1),
    ];
});
