<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class HomeController extends BaseController
{

    public function index(){
        
        $category3 = Category::select('*')->limit(3)->get();
        $review = Movie::where('film_hot',1)->inRandomOrder()->limit(4)->get();
        return view('user.pages.index')->with([
                'review'=>$review,
                'category3' => $category3,
        ]);
        
    }

    public function language($lang){

        Session::put('locale', $lang);
        return redirect()->back();
        
    }
}
