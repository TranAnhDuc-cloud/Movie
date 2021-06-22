<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class HomeController extends BaseController
{

    public function index(){
        // Trailer
        $trailer = Movie::where('film_hot',0)->inRandomOrder()->offset(1)->limit(1)->get();
        $category3 = Category::select('*')->limit(3)->get();
        $review = Movie::where('film_hot',1)->inRandomOrder()->limit(8)->get();
        return view('user.pages.index')->with([
                'review'=>$review,
                'category3' => $category3,
                'trailer' => $trailer,
        ]);
        
    }

    public function language($lang){

        Session::put('locale', $lang);
        return redirect()->back();
        
    }
}
