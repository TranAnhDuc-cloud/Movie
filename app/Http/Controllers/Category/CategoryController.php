<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Contry;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Menu;
use App\Movie;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Type_movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends BaseController
{
    //
    protected $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository){
        return $this->categoryRepository =$categoryRepository;
    }
    
    public function index(){
        $getAll = $this->categoryRepository->getAll();
        return view('admin.category.index')->with([
            'getAll' => $getAll,
            ]);
    }

    public function show(){
        return view('admin.category.add')->with([
        ]);
    }

    public function store(CategoryRequest $request){
        $this->categoryRepository->create($request->all());
        return redirect()->route('admin.category.index')->with(
            'success',trans('admin.add-success')
        );
    }
    
    public function edit($id){
        $category = $this->categoryRepository->find($id);
        return view('admin.category.edit')->with(['category'=>$category]);
    }

    public function update($id , CategoryRequest $request){
        $this->categoryRepository->update($id,$request->all());
        return redirect()->route('admin.category.index')->with(['
            success'=>trans('admin.update-success')
        ]);
    }

    public function destroy($id){
        $this->categoryRepository->delete($id);
        return redirect()->route('admin.category.index')->with('
        success', trans('admin.delete-success')
    );
    }
}
