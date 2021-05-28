<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Type_movie::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name(),
        'handle'=>rand(2018,2020),
    ];
});
