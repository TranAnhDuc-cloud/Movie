<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Contry;
use App\Http\Controllers\BaseController;
use App\Movie;
use App\Type_movie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends BaseController
{
    //

    public function index() {
        $member = User::select('*')->orderby('created_at','Desc')->limit(16)->get();
        $created_at = Movie::select('*')->orderby('created_at','Desc')->limit(15)->get();
        return view('admin.dashboard.index')->with([
            'member'=>$member,
            'created_at'=>$created_at,
        ]);
    }
    public function contact() {
        $user = User::paginate(9);
        return view('admin.dashboard.contact')->with([
            'getAll'=>$user,
        ]);
    }
}
