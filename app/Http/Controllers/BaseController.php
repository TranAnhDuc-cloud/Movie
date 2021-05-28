<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Movie;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //Menu
    protected function menu(){
        return Menu::all();
    }

    // FOOTER
    protected function footerMovies(){
        return  Movie::where('view','>',10)->orderBy('view','Desc')->limit(3)->get();
    }

    protected function footerCategory(){
        return  Category::all();
    }

    // MOVIE
    protected function phimMoiNhat(){
        return Movie::select('*')->orderby('created_at','Desc')->limit(9)->get();
    }

    protected function topXemNhieu(){
        return Movie::where('view','>',100)->orderBy('view','Desc')->limit(6)->get();
    }

    protected function phimNoiBat(){
        return  Movie::where('film_hot','=',1)->limit(4)->get();
    }

    protected function phimNoiBat1(){
        return Movie::where('view','>',200)->limit(1)->get();
    }

   // Trailer
    protected function trailer(){
        return Movie::where('film_hot',0)->offset(1)->limit(1)->get();
    }

}
