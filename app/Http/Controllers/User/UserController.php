<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Type_movie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository){
         $this->userRepository = $userRepository;
    }
    public function index(){
        $getAll = $this->userRepository->getAll();
        return view('admin.user.index')->with([
            'getAll'=> $getAll,
        ]);
    }
    public function show(){
        return view('admin.user.add')->with([
        ]);
    }
    public function store(Request $request){
       try {
            $check = User::where('username',$request->username)->first();
            if($check){
                return redirect()->route('admin.user.add')->with('success','User Đã Tồn Tại');
            }else{
                $created = $this->userRepository->create([
                    'username'=>$request->username,
                    'password'=>bcrypt($request->password),
                    'fullname'=>$request->fullname,
                    'level'=>$request->level,
                    'email'=>$request->email,
                    'remember_token' => rand(1,1000),
                    'email_verified_at' => now(),
                    ]);
                if($created->save())
                    return redirect()->route('admin.user.index')->with('success','Thêm User '.$request->username.' Thành Công');
            }
       } catch (\Throwable $th) {
           //throw $th;
           return redirect()->route('admin.user.add')->with('error','Nhập Thiếu Dữ Liệu');
       }
    }
    public function info($name,$id) {
        $info = User::find($id);
        return view('admin.user.info')->with([
            'info'=>$info,
        ]);
    }
    public function edit($id){
        $user = $this->userRepository->find($id);
        return view('admin.user.edit')->with([
            'user'=>$user,
        ]);
    }
    public function update($id , Request $request){
        try {
            $user = $this->userRepository->find($id);
            if(isset($request->fullname)){
                $user->fullname = $request->fullname;
            }elseif (isset($request->level)){
                $user->level = $request->level;
            }else{
                $user->email = $request->email;
            }
            if($user->save()){
                return redirect()->route('admin.user.index')->with([
                    'success' => 'Update User '.$user->username.' Thành Công',
                ]);
            }
        } catch (\Throwable $th) {
            return redirect()->route('admin.user.edit',$id)->with([
                'success' => 'Update User '.$user->username.' Thất Bại ',
            ]);
        }
    }
    public function destroy($id){
        $this->userRepository->delete($id);
        return redirect()->route('admin.user.index')->with([
            'success' =>'Delete User Thành Công'
        ]);
    }
}
