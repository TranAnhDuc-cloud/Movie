<?php
namespace App\Repository;

use App\Jobs\ProcessImageThumbnails;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\EloquentRepository;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface{
    public function getModel(){
        return \App\User::class;
    }
    public function create(array $attributes){
            $available_avatars =  ['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png'];
            $user = new \App\User;
            $user->username = $attributes['username'];
            $user->password = bcrypt($attributes['password']);
            $user->fullname = $attributes['fullname'];
            $user->level = $attributes['level'];
            $user->email = $attributes['email'];
            $user->remember_token =  Str::random(40);
            $user->email_verified = Str::random(40);
            $user->avatar = $available_avatars[array_rand($available_avatars)];
            return $user->save();
    }
    public function update($id, array $attributes){
        
            $user = $this->find($id);
            if($user)
                $user->fullname = $attributes['fullname'];
                if($attributes['password'] == null){
                    $user->password = $user->password;
                }else{
                    $user->password = bcrypt($attributes['password']);
                }
                $user->active = $attributes['active'];
                $user->level = $attributes['level'];
                $user->phone = $attributes['phone'];
                $user->address = $attributes['address'];
            return $user;
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
        \App\User::withTrashed()->where('id', $id)->restore();
            return redirect()->route('admin.user.delete.list')->with([
                'success'=>trans('admin.restore-success'),
        ]);
    }

    public function deleteList(){
        $getAll = $this->getonlyTrashed();
        return view('admin.user.delete')->with([
            'deleted'=> $getAll,
        ]);
    }

    public function deleteHard($id){
         \App\User::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('admin.user.delete.list')->with(
            'success',trans('admin.delete-success')
        );
    }

    public function updateAvatar($id,$name){
       $result = $this->find($id);
        if($result){
            $result->avatar = $name;
            $result->save();
            return $result;
        }
        return false;
    }

}