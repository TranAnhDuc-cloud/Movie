<?php

namespace App\Http\Controllers\Category;


use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\CategoryRequest;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

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
      $store =  $this->categoryRepository->create($request->all());
           if($store->save()){
                return redirect()->route('admin.category.index')->with(
                'notifi',trans('admin.add-success')
            );
        }
    }
    
    public function edit($id){
        $category = $this->categoryRepository->find($id);
        return view('admin.category.edit')->with(['category'=>$category]);
    }

    public function update(CategoryRequest $request ,$id){
       $update = $this->categoryRepository->update($id,$request->all());
            if($update->save()){
                return redirect()->route('admin.category.index')->with(['
                notifi'=>trans('admin.update-success')
            ]);
        }
    }

    public function destroy($id){
        $this->categoryRepository->delete($id);
        return redirect()->route('admin.category.index')->with('
        notifi', trans('admin.delete-success')
    );
    }
}
