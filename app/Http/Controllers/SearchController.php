<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        // HEADER
        $menu = Menu::all();
        $film_hot = Movie::where('film_hot','=',1)->limit(4)->get();
        $film_hot1 = Movie::where('view','>',200)->limit(1)->get();
        // FOOTER
        $new = Movie::select('*')->orderby('created_at','Desc')->limit(9)->get();
        $category = Category::all();
        $movies = Movie::where('view','>',10)->orderBy('view','Desc')->limit(3)->get();
        // MAIN
        $searchTerm = $request->search;
        $view = Movie::where('view','>',100)->orderBy('view','Desc')->limit(6)->get();
        $result =  Movie::whereLike(['title', 'category.name'], $searchTerm)->paginate(9)->withQueryString();
        if($result->isEmpty()){
            return view('user.pages.search')->with([
                'result' => $result,    
                'searchTerm' => $searchTerm,
                'view'=>$view,
                'error'=>"Kết quả tìm kiếm không phù hợp",
                'category'=>$category,
                'movies'=>$movies,
                'new'=>$new,
                'film_hot'=>$film_hot,
                'film_hot1'=>$film_hot1,
                'menu'=>$menu,
            ]);
        }else{
            return view('user.pages.search')->with([
                'result' => $result,    
                'searchTerm' => $searchTerm,
                'view'=>$view,
                'category'=>$category,
                'movies'=>$movies,
                'new'=>$new,
                'film_hot'=>$film_hot,
                'film_hot1'=>$film_hot1,
                'menu'=>$menu,
            ]);
        }
            
    }
}
