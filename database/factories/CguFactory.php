<?php

use Faker\Generator as Faker;

$factory->define(App\Cgu::class, function (Faker $faker) {
    return [
        'type' => $faker->jobTitle,
        'cgu'  => $faker->randomHtml(2,3)
    ];
});
