<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class HomeController extends BaseController
{
    public function index(){
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
        $review = Movie::where('film_hot',1)->inRandomOrder()->limit(4)->get();
        
        return view('user.pages.index')->with([
                'action'=>$film_action,
                'action1'=>$film_action1,
                'vothuat_film'=>$vothuat_film,
                'vothuat_film1'=>$vothuat_film1,
                'hoathinh_film'=>$hoathinh_film,
                'hoathinh_film1'=>$hoathinh_film1,
                'review'=>$review,
                'cate'=>BaseController::mainCategory(),
                'category'=>BaseController::footerCategory(),
                'film_hot'=>BaseController::phimNoiBat(),
                'film_hot1'=>BaseController::phimNoiBat1(),
                'menu'=>BaseController::menu(),
                'movies'=>BaseController::footerMovies(),
                'trailer'=>BaseController::trailer(),
                'view'=>BaseController::topXemNhieu(),
                'new'=>BaseController::phimMoiNhat(),
        ]);
    }
    public function language($lang){
        Session::put('locale', $lang);
          
        return redirect()->back();
    }
}
