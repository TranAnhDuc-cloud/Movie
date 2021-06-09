<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Movie;
use App\User;
use Illuminate\Http\Request;

class AccountController extends BaseController
{
    //
    public function index(){
        return view('user.detail.info')->with([
            'menu'=>BaseController::menu(),
            'movies'=>BaseController::footerMovies(),
            'category'=>BaseController::footerCategory(),
            'new'=>BaseController::phimMoiNhat(),
        ]);
    }
    
}
