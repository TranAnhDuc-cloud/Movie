<?php

namespace App\Http\Controllers\Movie;

use App\Category;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Movie;
use App\Repository\Interfaces\TypeMovieRepositoryInterface;
use App\Type_movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


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
    public function pages($name){
        $allTypes = Type_movie::all();
        foreach($allTypes as $item){
            $handle = $item->handle;
            $memi = DB::table($handle)->where('name',$name)->get();
                foreach ($memi as $row){
                    $typeMovies = Movie::where('year',$row->year)->where('type_movie',$item->id)->paginate(10);
                }
        }
        $typeMovie = $typeMovies;
        $titleMovies = $name;
        View::share('titleMovies', $titleMovies);
        return view('user.pages.type_movies')->with([
            'category'=>BaseController::footerCategory(),
            'film_hot'=>BaseController::phimNoiBat(),
            'film_hot1'=>BaseController::phimNoiBat1(),
            'menu'=>BaseController::menu(),
            'view'=>BaseController::topXemNhieu(),
            'movies'=>BaseController::footerMovies(),
            'typeMovies'=>$typeMovie,
            'new'=>BaseController::phimMoiNhat(),
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
                    'error','Add '.$request->name.'Thất Bại'
                );
            }else{
                DB::table($name)->insert([
                    'name' =>$request->name,    
                    'year' =>$request->year,
                    'created_at' =>now(),
                    'updated_at' =>now(),
                ]);
                return redirect()->route('admin.type.movie.index',$name)->with(
                    'success','Add '.$request->name.'Thành Công'
                );
            }
        } catch (\Throwable $th) {
            return redirect()->route('admin.type.movie.add',$name)->with(
                'success','Add '.$request->name.'Thất Bại'
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
                return redirect()->route('admin.type.movie.index',$name)->with('success','Đã Tồn Tại '.$request->name.' Vui Lòng Nhập Lại ');
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
                return redirect()->route('admin.type.movie.index',$name)->with('success','Update Thành Công '.$request->name);
            }
        } catch (\Throwable $th) {
            return redirect()->route('admin.type.movie.index',$name)->with('success','Chưa Nhập Dữ Liệu Để Cập Nhập');
        }
    }
    public function destroy($name,$id){
        $destroy = DB::table($name)->where('id', $id);
        $destroy->delete();
        return redirect()->route('admin.type.movie.index',$name)->with(
            'success', ' Xóa Thành Công'
        );
    }
}
