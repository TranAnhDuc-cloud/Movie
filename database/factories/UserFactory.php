<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $available_avatars =  ['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png'];
    return [
        'username' => $faker->name,
        'fullname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified' => null,
        'password' => bcrypt('1'),
        'level'=>0,
        'active' =>1,
        'provider' => null,
        'provider_id'=> null,
        'address'=> null,
        'avatar' => $available_avatars[array_rand($available_avatars)],
        'remember_token' => Str::random(10),
    ];
});
