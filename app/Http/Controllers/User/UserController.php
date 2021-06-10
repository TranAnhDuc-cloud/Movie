<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Movie;
use App\Repository\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends BaseController
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
    
    public function info() {
        return view('admin.user.info');
    }

    public function show(){
        return view('admin.user.add')->with([
        ]);
    }

    public function store(UserRequest $request){
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
        $getAll = $this->userRepository->getonlyTrashed();
        return view('admin.user.delete')->with([
            'deleted'=> $getAll,
            'movies' => BaseController::movieNewUpdate(),
        ]);
    }

    public function restore($id){
        $this->userRepository->restore($id);
            return redirect()->route('admin.user.delete.list')->with([
                'success'=>trans('admin.restore-success'),
        ]);
    }

    public function deleteHard($id){
       $this->userRepository->deleteHard($id);
        return  redirect()->route('admin.user.delete.list')->with(
            'success',trans('admin.delete-success')
        );
    }
}
