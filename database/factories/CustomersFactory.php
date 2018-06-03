<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'firstname'    => $faker->firstNameMale,
        'lastname'     => $faker->lastName,
        'gender'       => 1,
        'birthday'     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'nationality'  => $faker->countryCode,
        'email'        => $faker->safeEmail,
        'phone'        => $faker->phoneNumber,
        'company_name' => $faker->company,
        'job'          => $faker->jobTitle,
        'county'       => $faker->country,
        'region'       => $faker->state,
        'city'         => $faker->city,
        'postal'       => $faker->postcode,
        'address'      => $faker->streetAddress,
    ];
});
