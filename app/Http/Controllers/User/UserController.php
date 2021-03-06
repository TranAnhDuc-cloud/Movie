<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Services\uploadFileService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends AdminController
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
    
    public function info($id) {
        $user = $this->userRepository->find($id);
        $jointime = getJoinTimeUser($id);
       return view('admin.user.info')->with(['jointime'=>$jointime,'user'=>$user]);
    }

    public function show(){
        return view('admin.user.add');
    }

    public function store(UserRequest $request){
        $this->userRepository->create($request->all());
        return redirect()->route('admin.user.index')->with('
            success',trans('admin.add-success')
        );
    }
    
    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin.user.edit')->with([
            'user'=>$user,
        ]);
    }

    public function update(Request $request ,$id){
        // $request->only('name', 'password', 'role').
        if ($request->hasFile('avatar')) {
            $name = $request->file('avatar')->getClientOriginalName('avatar');
            uploadFileService::updateAvatar($request->file('avatar'),$name);
            $this->userRepository->updateAvatar($id,$name);
        }else {
            $this->userRepository->updateAvatar($id,$request->avatar_old);
        }
        $update = $this->userRepository->update($id,$request->all());
            if($update->save()){
                return redirect()->route('admin.user.index')->with(['
                    success'=>trans('admin.update-success')
                ]);
            }
        
    }

    public function destroy($id){
        $this->userRepository->delete($id);
        return redirect()->route('admin.user.index')->with([
            'success' =>trans('admin.delete-success')
        ]);
    }

    public function deleteList(){
        return $this->userRepository->deleteList();
    }

    public function restore($id){
        return $this->userRepository->restore($id);
    }

    public function deleteHard($id){
        return $this->userRepository->deleteHard($id);
    }

    public function updateAvatar($id ,Request $request){
        if ($request->hasFile('avatar')) {
            $name = $request->file('avatar')->getClientOriginalName('avatar');
            uploadFileService::updateAvatar($request->file('avatar'),$name);
            $this->userRepository->updateAvatar($id,$name);
            return redirect()->route('admin.user.info',$id)->with([
                'success'=>trans('admin.update-success'),
            ]);
        }
        return redirect()->back();
        
    }

}
