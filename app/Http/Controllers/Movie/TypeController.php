<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\TypeMovieEditRequest;
use App\Http\Requests\Admin\TypeMovieRequest;
use App\Http\Requests\Admin\TypeMovieUpdateRequest;
use App\Repository\Interfaces\TypeMovieRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TypeController extends BaseController
{
    //
    protected $typeMovieRepository;
   
    public function __construct(TypeMovieRepositoryInterface $typeMovieRepository){
        $this->typeMovieRepository = $typeMovieRepository;
       
    }

    public function index($name){
        $handle = $this->typeMovieRepository->getHandler($name)->get();
        return view('admin.type.index')->with([
            'handle'=> $handle,
            'name'=>$name,
        ]);
    }
    
    public function show($name){
        return view('admin.type.add')->with([
            'name' =>$name,
        ]);
    }

    public function store($name,TypeMovieRequest $request){
        $requestall = $request->except(['_method','_token']);
        $this->typeMovieRepository->createHandler($name,$requestall);
        return redirect()->route('admin.type.movie.index',$name)->with(
            'success',trans('admin.add-success')
        );
    }

    public function edit($name,$id){
       $type = $this->typeMovieRepository->findHandler($name,$id)->first();
        return view('admin.type.edit')->with([
            'type'=>$type,
            'name'=>$name,
        ]);
    }

    public function update($name ,$id, TypeMovieUpdateRequest $request){
        $type = $this->typeMovieRepository->findHandler($name,$id);
        $requestall = $request->except(['_method','_token']);
        $type->update($requestall);
            return redirect()->route('admin.type.movie.index',$name)->with('
            success',trans('admin.update-success').$request->name
        ); 
    }

    public function destroy($name,$id){
        $type = $this->typeMovieRepository->findHandler($name,$id);
        $type->delete();
        return redirect()->route('admin.type.movie.index',$name)->with(
            'success', trans('admin.delete-success')
        );
    }
}
