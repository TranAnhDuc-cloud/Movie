<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AccountController extends BaseController
{
    //
    public function index(){
        return view('user.detail.info');
    }

}
