<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use App\Tag;
use Faker\Generator as Faker;

$factory->define(App\Categories_tags::class, function (Faker $faker) {
    return [
        'categories_id'=>Category::all()->random()->id,
        'tags_id'=>Tag::all()->random()->id,
    ];
});
