<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Theater_movie;
use Faker\Generator as Faker;

$factory->define(Theater_movie::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name(),
        'year'=>rand(2018,2020),
    ];
});
