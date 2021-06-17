<?php

namespace App\Http\Controllers;

use App\Events\userChangeToPasswords;
use App\Jobs\ProcessImageThumbnails;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class JobController extends Controller
{
    // Kích Hoạt Events
    public function processSubmitChangePassword($id){
        $tag =  User::findOrFail($id);
        event(new userChangeToPasswords($tag));
    }

    public function index(){
        return view('job.upload');
    }
    public function upload(Request $request){
    // upload image
    $this->validate($request, [
        'demo_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $image = $request->file('demo_image');
    $input['demo_image'] = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images');
    $image->move($destinationPath, $input['demo_image']);
 
    // Save Image Vào DB
     $user =  User::create([
            'username' => 'anhduc1',
            'fullname' => 'anhduc1',
            'email' => 'anhduc1@gmail.com',
            'email_verified' => null,
            'password' => bcrypt('1'),
            'level'=>0,
            'active' =>1,
            'provider' =>null,
            'provider_id'=>null,
            'address'=>'Tổ 1, Phú Bài, Hương Thủy ,TT Huế',
            'avatar' =>  'images' . DIRECTORY_SEPARATOR . $input['demo_image'],
            'remember_token' => Str::random(10),
        ]);
    $user->save();
    // defer the processing of the image thumbnails
    ProcessImageThumbnails::dispatch($user);
 
    return Redirect::to('image/index')->with('message', 'Image uploaded successfully!');
}
}
