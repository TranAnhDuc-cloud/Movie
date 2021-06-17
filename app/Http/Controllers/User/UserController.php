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
        $member = $this->userRepository->find($id);
        $jointime = getJoinTimeUser($id);
       return view('admin.user.info')->with(['jointime'=>$jointime,'member'=>$member]);
    }

    public function show(){
        return view('admin.user.add');
    }

    public function store(UserRequest $request){
        //  $request->only('name', 'password', 'role').
        $this->userRepository->create($request->all());
        return redirect()->route('admin.user.index')->with('
            success',trans('admin.add-success')
        );
    }
    
    public function edit($id){
        $user = $this->userRepository->find($id);
        return view('admin.user.edit')->with([
            'user'=>$user,
        ]);
    }

    public function update(Request $request ,$id){
        // $request->only('name', 'password', 'role').
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
        $name = $request->file('avatar')->getClientOriginalName('avatar');
        uploadFileService::updateAvatar($request->file('avatar'),$name);
        // dispatch(new ProcessImageThumbnails($image));
        return $this->userRepository->updateAvatar($id,$name);
    }

}
