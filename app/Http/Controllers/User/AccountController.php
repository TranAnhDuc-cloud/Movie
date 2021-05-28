<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Movie;
use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index($name ,$id){
        $info = User::find($id);
        return view('user.detail.account')->with([
            'menu'=>$this->header(),
            'movies'=>$this->footerMovies(),
            'category'=>$this->footerCategory(),
            'info'=>$info,
        ]);
    }
    public function header(){
        return $menu = Menu::all();
    }
    public function footerMovies(){
        return  $movies = Movie::where('view','>',10)->orderBy('view','Desc')->limit(3)->get();
    }
    public function footerCategory(){
        return $category = Category::all();
    }
    
}
