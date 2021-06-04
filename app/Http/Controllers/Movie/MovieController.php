<?php

namespace App\Http\Controllers\Movie;

use App\Category;
use App\Contry;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MovieRequest;
use Illuminate\Http\Request;
use App\Repository\Interfaces\MovieRepositoryInterface;
use App\Services\uploadFileService;
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
        $image = $request->file('url_picture');
        $video = $request->file('url_link');
        $all =$request->all();
        $all['url_picture'] = 'img/news/'.$image->getClientOriginalName('url_picture');
        $all['url_link'] = 'video/'.$video->getClientOriginalName('url_link');
        uploadFileService::handleImg($image,$all['url_picture']);
        uploadFileService::handleVideo($video,$all['url_link']);
        $movie = $this->movieRepository->create($all);
        if($movie->save()){
            return redirect()->route('admin.movie.index')->with('
            success',trans('admin.add-success'));
        }
    }

    public function edit($id){
        $movie = $this->movieRepository->find($id);
        return view('admin.movie.edit')->with([
        'movie'=>$movie,
        'category'=>Category::all(),
        'contry'=>Contry::all(),
        'typeMovie'=>Type_movie::all()
        ]);
    }
        
    public function update($id , MovieRequest $request ){
        $image = $request->file('url_picture');
        $video = $request->file('url_link');
        $all= $request->all();
        $all['url_picture'] = 'img/news/'.$image->getClientOriginalName('url_picture');
        $all['url_link'] = 'video/'.$video->getClientOriginalName('url_link');
        uploadFileService::handleImg($image,$all['url_picture']);
        uploadFileService::handleVideo($video,$all['url_link']);
        $update = $this->movieRepository->update($id,$all); 
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


