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
        $result =  Movie::whereLike(['title', 'category.name'], $searchTerm)->paginate(12)->withQueryString();
        return view('user.pages.search')->with([
            'result' => $result,    
            'searchTerm' => $searchTerm,
        ]);
    }
    public function searchAdmin(Request $request){
        $searchTerm = $request->search;
        $movie =  Movie::whereLike(['title', 'category.name' , 'actor', 'directors'], $searchTerm)->get();
        $user =  User::whereLike(['username', 'fullname'], $searchTerm)->get();
        $category =  Category::whereLike(['name'], $searchTerm)->get();
        return view('admin.dashboard.search')->with([
            'movie' => $movie,
            'user' => $user,
            'category' => $category,
        ]);
    }

    public function searchContact(Request $request){
        $searchTerm = $request->search;
        $user =  User::whereLike(['username', 'fullname'], $searchTerm)->paginate(6)->withQueryString();
        return view('admin.dashboard.contact')->with('getAll',$user);
    }
}
