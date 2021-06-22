<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contry;
use App\Menu;
use App\Movie;
use App\Type_movie;
use App\User;
use App\Tag;
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
        $cate = $this->mainCategory();
        $contry = $this->contryAll();
        $typeMovie = $this->typeMovieAll();
        $tags = $this->tagsMovie();
        View::share([
            'category'=>$category,
            'film_hot'=> $film_hot,
            'film_hot1' => $film_hot1,
            'menu'=> $menu,
            'new' => $new,
            'movies'=>$movies,
            'view'=>$view,
            'cate' => $cate,
            'contry' => $contry,
            'typeMovie' => $typeMovie,
            'tags' => $tags,
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
    
    protected function tagsMovie(){
        return Tag::all();
    }
}
