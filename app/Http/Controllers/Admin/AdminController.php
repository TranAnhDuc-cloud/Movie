<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\BaseController;
use App\Movie;
use App\User;
use Illuminate\Http\Request;


class AdminController extends BaseController
{
    //
    public function __construct(){
       
    }

    public function index() {
        $member = User::select('*')->orderby('created_at','Desc')->limit(16)->get();
        $movies = Movie::orderby('created_at','Desc')->limit(10)->get();
        $created_at = Movie::select('*')->orderby('created_at','Desc')->limit(15)->get();
        return view('admin.dashboard.index')->with([
            'member'=>$member,
            'movies'=>$movies,
            'created_at'=>$created_at,
        ]);
    }
}
