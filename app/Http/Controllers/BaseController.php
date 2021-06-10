<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contry;
use App\Menu;
use App\Movie;
use App\Type_movie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct(){
        $category = $this->footerCategory();
        $film_hot = $this->phimNoiBat();
        $film_hot1 = $this->phimNoiBat1();
        $menu= $this->menu();
        $new = $this->phimMoiNhat();
        $movies = $this->footerMovies();
        $view = $this->topXemNhieu();
        $trailer = $this->trailer();
        $cate = $this->mainCategory();
        $contry = $this->contryAll();
        $typeMovie = $this->typeMovieAll();
        $siderbarAdmin = $this->movieNewUpdate();
        View::share([
            'category'=>$category,
            'film_hot'=> $film_hot,
            'film_hot1' => $film_hot1,
            'menu'=> $menu,
            'new' => $new,
            'movies'=>$movies,
            'view'=>$view,
            'trailer' => $trailer,
            'cate' => $cate,
            'contry' => $contry,
            'typeMovie' => $typeMovie,
            'siderbar' => $siderbarAdmin,
        ]);
    }
    
    //Menu
    protected function menu(){
        return Menu::all();
    }

    // FOOTER
    protected function footerMovies(){
        return  Movie::where('view','>',100)->inRandomOrder()->orderBy('view','Desc')->limit(3)->get();
    }

    protected function footerCategory(){
        return  Category::all();
    }

    protected function mainCategory(){
       return Category::select('*')->inRandomOrder()->limit(3)->get();
    }

    // MOVIE
    protected function phimMoiNhat(){
        return Movie::select('*')->inRandomOrder()->orderby('created_at','Desc')->limit(6)->get();
    }

    protected function topXemNhieu(){
        return Movie::where('view','>',100)->inRandomOrder()->orderBy('view','Desc')->limit(6)->get();
    }

    protected function phimNoiBat(){
        return  Movie::where('film_hot','=',1)->inRandomOrder()->limit(4)->get();
    }

    protected function phimNoiBat1(){
        return Movie::where('view','>',200)->inRandomOrder()->limit(1)->get();
    }

   // Trailer
    protected function trailer(){
        return Movie::where('film_hot',0)->inRandomOrder()->offset(1)->limit(1)->get();
    }

    protected function movieAll(){
        return Movie::all();
    }

    protected function userAll(){
        return User::all();
    }

    protected function typeMovieAll(){
        return Type_movie::all();
    }

    protected function contryAll(){
        return Contry::all();
    }

    protected function movieHot(){
        return Movie::where('film_hot',1)->get();
    }

    // MovieSiderBar ADMIN
    protected function movieNewUpdate(){
        return Movie::orderby('created_at','Desc')->limit(10)->get();
    }

}
