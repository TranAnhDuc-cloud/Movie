<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Contry;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->title(),
        'name'=>$faker->title(),
        'directors'=>$faker->name(),
        'actor'=>$faker->name(),
        'time'=>rand(20,120),
        'date'=>$faker->date(),
        'url_picture'=>'abc.com',
        'url_link'=>'abc.com',
        'view'=>rand(0,12),
        'description'=>$faker->text(1000),
        'status'=>$faker->name(),
        'film_hot'=>$faker->boolean(),
        'type_movie'=>rand(1,3),
        'year'=>rand(2018,2021),
        'contries_id'=>Contry::all()->random()->id,
        'categories_id'=>Category::all()->random()->id,

    ];
});
