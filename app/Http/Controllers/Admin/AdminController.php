<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Type_movie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    //
    public function __construct(){
       
    }

    public function index() {
        return view('admin.pages.index');
    }
}
