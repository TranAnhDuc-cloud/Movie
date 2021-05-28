<?php

namespace App\Http\Controllers\Movie;

use App\Category;
use App\Contry;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Movie;
use App\Repository\Interfaces\MovieRepositoryInterface;
use App\Type_movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    protected $movieRepository;
    public function __construct(MovieRepositoryInterface $movieRepository){
        return $this->movieRepository =$movieRepository;
    }
    public function detail($id){
        return $this->movieRepository->detail($id);
    }
    public function watch($id){
        return $this->movieRepository->watch($id);
    }
    public function index(){
        $getAll = $this->movieRepository->getAll();
        return view('admin.movie.index')->with([
            'getAll'=>$getAll,
        ]);
    }
    public function show(){
        $category = Category::all();
        $contry = Contry::all();
        $typeMovie = Type_movie::all();
        return view('admin.movie.add')->with([
            'category'=>$category,
            'contry'=>$contry,
            'typeMovie'=>$typeMovie
        ]);
    }
    public function store(Request $request){
        try {
            $check = $this->movieRepository->find($request->title);
            if($check){
                return redirect()->route('admin.movie.add')->with('success','Movie Đã Tồn Tại');
            }else{
                $created = $this->movieRepository->create($request->input());
                if($created->save()){
                    return redirect()->route('admin.movie.index')->with('success','Thêm '.$request->title.'Thành Công');
                }
            }
        } catch (\Throwable $th) {
            return redirect()->route('admin.movie.add')->with('success','Dữ Liệu Nhập Vào Không Phù Hợp Hoặc Thiếu');
        }
    }
    public function edit($id){
        $category = Category::all();
        $contry = Contry::all();
        $typeMovie = Type_movie::all();
        $movie = $this->movieRepository->find($id);
        return view('admin.movie.edit')->with(['movie'=>$movie,
        'category'=>$category,
        'contry'=>$contry,
        'typeMovie'=>$typeMovie,
        ]);
    }
    public function update($id , Request $request , Movie $movie){
            $update = $this->movieRepository->update($id,$request->all());
            if($update->save()){
                return redirect()->route('admin.movie.index')->with('success','Sửa '.$request->title.' Thành Công');
            }
            return redirect()->route('admin.movie.index')->with('success','Sửa '.$request->title.' Thất Bại');
    }
    public function destroy($id){
        $this->movieRepository->delete($id);
        return redirect()->route('admin.movie.index')->with('success', ' Xóa Thành Công');
    }
}
