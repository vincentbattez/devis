<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'email'          => 'a@a.a',
        'firstname'      => $faker->firstNameMale,
        'lastname'       => $faker->lastName,
        'logo'           => $faker->imageUrl($width = 150, $height = 150),
        'password'       => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'company'        => $faker->company,
        'job'            => $faker->jobTitle,
        'phone'          => $faker->phoneNumber,
        'address'        => $faker->address,
        'remember_token' => str_random(10),
    ];
});
