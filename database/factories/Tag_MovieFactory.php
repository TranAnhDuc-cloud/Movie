<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Movie;
use App\Tag;
use Faker\Generator as Faker;

$factory->define(App\Tags_movies::class, function (Faker $faker) {
    return [
        //
        'tags_id'=>Tag::all()->random()->id,
        'movies_id'=>Movie::all()->random()->id,
    ];
});
