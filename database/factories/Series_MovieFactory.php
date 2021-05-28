<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Series_movie;
use Faker\Generator as Faker;

$factory->define(Series_movie::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name(),
        'year'=>rand(2018,2020),
    ];
});
