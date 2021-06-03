<?php

namespace App\Http\Controllers\Movie;

use App\Category;
use App\Contry;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MovieRequest;
use App\Repository\Interfaces\MovieRepositoryInterface;
use App\Type_movie;

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
        return view('admin.movie.add')->with([
            'category'=>Category::all(),
            'contry'=>Contry::all(),
            'typeMovie'=>Type_movie::all()
        ]);
    }
    public function store(MovieRequest $request){
        $this->movieRepository->create($request->all());
        return redirect()->route('admin.movie.index')->with('
            success',trans('admin.add-success')
        );
    }
    public function edit($id){
        $movie = $this->movieRepository->find($id);
        return view('admin.movie.edit')->with([
        'movie'=>$movie,
        'category'=>Category::all(),
        'contry'=>Contry::all(),
        'typeMovie'=>Type_movie::all(),
        ]);
    }
    public function update($id , MovieRequest $request ){
        $update = $this->movieRepository->update($id,$request->all());
        if($update->save())
            return redirect()->route('admin.movie.index')->with('
            success',trans('admin.update-success')
        );
    }
    public function destroy($id){
        $this->movieRepository->delete($id);
        return redirect()->route('admin.movie.index')->with(
            'success', trans('admin.delete-success')
        );
    }
}
