<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->title(),
        'description'=>$faker->text(),
        'url_picture'=>'img/news/news'.rand(200,247).'.jpg',
    ];
});
