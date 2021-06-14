<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Contry;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->name(),
        'name'=>$faker->name(),
        'directors'=>$faker->name(),
        'actor'=>$faker->name(),
        'time'=>rand(20,120),
        'date'=>$faker->date(),
        'url_picture'=>'img/news/news'.rand(200,247).'.jpg',
        'url_link'=>'video/video.mp4',
        'view'=>rand(0,500),
        'description'=>$faker->text(255),
        'status'=>$faker->name(),
        'film_hot'=>$faker->boolean(),
        'type_movie'=>rand(1,3),
        'year'=>rand(2018,2021),
        'contries_id'=>Contry::all()->random()->id,
        'categories_id'=>Category::all()->random()->id,

    ];
    
});
