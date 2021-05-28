<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Single_movie;
use Faker\Generator as Faker;

$factory->define(Single_movie::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name(),
        'year'=>rand(2018,2020),
    ];
});
