<?php

namespace App\Http\Controllers\Admin;

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
        $member = User::select('*')->orderby('created_at','Desc')->limit(15)->get();
        $movies = Movie::orderby('created_at','Desc')->limit(10)->get();
        $created_at = Movie::select('*')->orderby('created_at','Desc')->limit(15)->get();
        $movieAll = $this->movieAll()->count();
        $memberAll = $this->userAll()->count();
        $movieHot = $this->movieHot()->count();
        return view('admin.dashboard.index')->with([
            'member'=>$member,
            'movies'=>$movies,
            'created_at'=>$created_at,
            'movieAll'=>$movieAll,
            'memberAll' => $memberAll,
            'movieHot' => $movieHot,
        ]);
    }

    public function deleteList(){
        $userdelete = 
        return view('admin.dashboard.delete');
    }
}
