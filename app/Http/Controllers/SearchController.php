<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchController extends BaseController
{
    //
    public function search(Request $request){
        $searchTerm = $request->search;
        $view = Movie::where('view','>',100)->orderBy('view','Desc')->limit(6)->get();
        $result =  Movie::whereLike(['title', 'category.name'], $searchTerm)->paginate(9)->withQueryString();
            return view('user.pages.search')->with([
                'result' => $result,    
                'searchTerm' => $searchTerm,
                'view'=>$view,
                'category'=>BaseController::footerCategory(),
                'movies'=>BaseController::footerMovies(),
                'new'=>BaseController::phimMoiNhat(),
                'film_hot'=>BaseController::phimNoiBat(),
                'film_hot1'=>BaseController::phimNoiBat1(),
                'menu'=>BaseController::menu(),
            ]);
    }
}
