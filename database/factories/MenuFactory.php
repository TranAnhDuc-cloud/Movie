<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name(),
        'handle'=>$faker->name(),
    ];
});
