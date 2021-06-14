<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->title(),
        'description'=>$faker->text(),
        'url_picture'=>'img/news/news'.rand(200,247).'.jpg',
    ];
});
