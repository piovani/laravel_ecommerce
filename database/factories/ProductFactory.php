<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\Domain\Products\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'value' => $faker->numberBetween(0.01, 10000.00),
    ];
});
