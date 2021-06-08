<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchController extends BaseController
{
    //
    public function search(Request $request){
        $searchTerm = $request->search;
        $view = Movie::where('view','>',100)->orderBy('view','Desc')->limit(6)->get();
        $result =  Movie::whereLike(['title', 'category.name'], $searchTerm)->paginate(9)->withQueryString();
        if($result){
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
        }else{
            return redirect()->route('search')->with('notification','Không có kết quả tìm kiếm phù hợp');
        }
    }
    public function searchAdmin(Request $request){
        $searchTerm = $request->search;
        $movie =  Movie::whereLike(['title', 'category.name' , 'actor', 'directors'], $searchTerm)->get();
        $user =  User::whereLike(['username', 'fullname'], $searchTerm)->get();
        $category =  Category::whereLike(['name'], $searchTerm)->get();
        return view('admin.dashboard.search')->with([
            'movie' => $movie,
            'user' => $user,
            'category' => $category
        ]);
    }
}
