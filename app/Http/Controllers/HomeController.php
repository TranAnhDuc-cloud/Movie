<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(){
        $this->index = 'user.pages.index';
        return $this->home($this->index);
    }
    public function home($index){
        $category = Category::all();
        // Movies
        $movies = Movie::where('view','>',10)->orderBy('view','Desc')->limit(3)->get();
        // View
        $view = Movie::where('view','>',100)->orderBy('view','Desc')->limit(6)->get();
        // Film Hot
        $film_hot = Movie::where('film_hot','=',1)->limit(4)->get();
        $film_hot1 = Movie::where('view','>',200)->limit(1)->get();
        // MENU
        $menu = Menu::all();
        // Action Film
        $film_action = Movie::where('categories_id','2')->offset(1)->limit(6)->get();
        $film_action1 = Movie::where('categories_id','=','2')->where('view','>',2)->limit(1)->get();
        // Võ Thuật Film
        $vothuat_film = Movie::where('categories_id','=','9')->offset(1)->limit(6)->get();
        $vothuat_film1 = Movie::where('categories_id','=','9')->where('view','>',2)->limit(1)->get();
        // Hoạt Hình Film
        $hoathinh_film = Movie::where('categories_id','=','3')->offset(1)->limit(6)->get();
        $hoathinh_film1 = Movie::where('categories_id','=','3')->where('view','>',2)->limit(1)->get();
        // Review Film
        $review = Movie::where('film_hot',2)->limit(4)->get();
        // Trailer
        $trailer = Movie::where('film_hot',0)->offset(1)->limit(1)->get();
        // Category
        $cate = Category::select('*')->offset(4)->limit(3)->get();
        // Phim Mới Nhất
        $new = Movie::select('*')->orderby('created_at','Desc')->limit(9)->get();
        return view($index)->with([
                'category'=>$category,
                'cate'=>$cate,
                'film_hot'=>$film_hot,
                'film_hot1'=>$film_hot1,
                'menu'=>$menu,
                'movies'=>$movies,
                'action'=>$film_action,
                'action1'=>$film_action1,
                'vothuat_film'=>$vothuat_film,
                'vothuat_film1'=>$vothuat_film1,
                'hoathinh_film'=>$hoathinh_film,
                'hoathinh_film1'=>$hoathinh_film1,
                'review'=>$review,
                'trailer'=>$trailer,
                'view'=>$view,
                'new'=>$new,
        ]);
    }
    
}
