<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Requests\Auth\Register;
use App\Http\Requests\ChangePassword;
use App\Http\Requests\InfomationRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Symfony\Component\Console\Input\Input as InputInput;

class AccountController extends BaseController
{
    //
    public function index(){
        return view('user.detail.info');
    }

    public function changePassword(ChangePassword $request){
        if(Hash::check($request->get('passwordOld'),Auth::user()->password)){
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($request->get('password'));
            $user->save();
            Session::flash('success',trans('admin.update-success'));
            return redirect()->back();
        }else{
            Session::flash('error',trans('admin.update-error'));
            return redirect()->back();
        }
    }
    public function changeInfomation(InfomationRequest $request){
        $user = User::findOrFail(Auth::user()->id);
        if($user){
            $user->fullname = $request->get('fullname');
            $user->phone = $request->get('phone');
            $user->address = $request->get('address');
            $user->save();
            echo "đã save";
            // Session::flash('success',trans('admin.update-success'));
            // return redirect()->back();
        }else{
            // Session::flash('error',trans('admin.update-error'));
            // return redirect()->back();
            echo "chưa save save";
        }
    }
}
