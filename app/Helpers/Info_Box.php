<?php

use App\Category;
use App\Menu;
use App\Movie;
use App\User;
use Illuminate\Support\Facades\DB;

function movieAll(){
    return Movie::all();
}

 function userAll(){
    return User::all();
}

 function movieHot(){
    return Movie::where('film_hot',1)->get();
}

function navMenu($handle){
    return DB::table($handle)->select('*')->where('deleted_at',null)->get();
}
