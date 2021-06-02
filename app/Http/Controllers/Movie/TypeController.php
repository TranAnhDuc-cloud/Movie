<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\BaseController;
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
        $handle =  DB::table($name)->get();
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

    public function store($name,Request $request){
        try {
            $check = DB::table($name)->where('name','=', $request->name)->first();
            if($check){
                return redirect()->route('admin.type.movie.add',$name)->with(
                    'error',trans('admin.add-error')
                );
            }else{
                DB::table($name)->insert([
                    'name' =>$request->name,    
                    'year' =>$request->year,
                    'created_at' =>now(),
                    'updated_at' =>now(),
                ]);
                return redirect()->route('admin.type.movie.index',$name)->with(
                    'success',trans('admin.add-success')
                );
            }
        } catch (\Throwable $th) {
            return redirect()->route('admin.type.movie.add',$name)->with(
                'success',trans('admin.add-error')
            );
        }
    }

    public function edit($name,$id){
        $type = DB::table($name)->find($id);
        return view('admin.type.edit')->with([
            'type'=>$type,
            'name'=>$name,
        ]);
    }

    public function update($name ,$id, Request $request){
        try {
            $check = DB::table($name)->where('name','=', $request->name)->first();
            if($check){
                return redirect()->route('admin.type.movie.index',$name)->with('success',trans('admin.exist').$request->name.trans('admin.pleasreturn'));
            }
            $type = DB::table($name)->where('id',$id);
            if($request->name){
                $update = $type->update([
                    'name'=>$request->name,
                ]);
            }else{
                $update = $type->update([
                    'year'=>$request->year,
                ]);
            }
            if($update){
                return redirect()->route('admin.type.movie.index',$name)->with('success',trans('admin.update-success').$request->name);
            }
        } catch (\Throwable $th) {
            return redirect()->route('admin.type.movie.index',$name)->with('success',trans('admin.data-error'));
        }
    }

    public function destroy($name,$id){
        $destroy = DB::table($name)->where('id', $id);
        $destroy->delete();
        return redirect()->route('admin.type.movie.index',$name)->with(
            'success', trans('admin.delete-success')
        );
    }
}
