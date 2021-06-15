<?php
namespace App\Repository;

use App\Jobs\ProcessImageThumbnails;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\EloquentRepository;
use Carbon\Carbon;
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
        \App\User::withTrashed()->where('id', $id)->restore();
       return redirect()->route('admin.user.delete.list')->with([
        'success'=>trans('admin.restore-success'),
]);
    }

    public function deleteHard($id){
         \App\User::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('admin.user.delete.list')->with(
            'success',trans('admin.delete-success')
        );
    }

    public function updateAvatar($id,$atributes){
       $result = $this->find($id);
        if($result){
            $result->avatar = $atributes;
            $result->save();
            return redirect()->route('admin.user.info',$id)->with(['
                success'=>trans('admin.update-success')
            ]);
        }
        return false;
    }

    public function info($id){
        $member = $this->find($id);
       $a = Carbon::now()->year;
       $b  =  $member->created_at->year;
       $result = $a - $b;
       if($result != 0){    
        return view('admin.user.info')->with(['member'=>$member,'jointime'=>$result.trans('admin.year')]);
       }else{
            $a = Carbon::now()->month;
            $b  =  $member->created_at->month;
            $result = $a - $b;
            if($result !=0){
                return view('admin.user.info')->with(['member'=>$member,'jointime'=>$result.trans('admin.month')]);
            }else{
                $a = Carbon::now()->day;
                $b  =  $member->created_at->day;
                $result = $a - $b;
                if($result !=0){
                    return view('admin.user.info')->with(['member'=>$member,'jointime'=>$result.trans('admin.day')]);
                }else{
                    $a = Carbon::now()->hour;
                    $b  =  $member->created_at->hour;
                    $result = $a - $b;
                    if($result !=0){
                        return view('admin.user.info')->with(['member'=>$member,'jointime'=>$result.trans('admin.hour')]);
                    }
                }
            }
       }
    }
}