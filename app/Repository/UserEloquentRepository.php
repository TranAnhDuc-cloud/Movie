<?php
namespace App\Repository;

use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\EloquentRepository;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface{
    public function getModel(){
        return \App\User::class;
    }
    public function create(array $attributes){
            $user = new \App\User;
            $user->username = $attributes['username'];
            $user->password = bcrypt($attributes['password']);
            $user->fullname = $attributes['fullname'];
            $user->level = $attributes['level'];
            $user->email = $attributes['email'];
            $user->remember_token =  Str::random(40);
            $user->email_verified = Str::random(40);
            return $user->save();
    }

    public function getAll(){
        return \App\User::paginate(10);
    }

    // Lấy các delete_at đã xóa
    public function getonlyTrashed(){
        return  \App\User::onlyTrashed()->paginate(10);
    }

    // Lấy tất cả có cả delete_at đã xóa
    public function getwithTrashed(){
        return  \App\User::withTrashed()->paginate(10);
    }

    public function restore($id){
       return \App\User::withTrashed()->where('id', $id)->restore();
    }

    public function deleteHard($id){
        return \App\User::withTrashed()->where('id', $id)->forceDelete();
    }
}