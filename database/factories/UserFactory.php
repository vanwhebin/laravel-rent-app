<?php

/** @var Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'real_name' => $faker->name(),
        'password' => bcrypt('123456'),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'gender' => ['先生', '女士'][mt_rand(0,1)]
    ];
});
