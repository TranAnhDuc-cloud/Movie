<?php

namespace App\Http\Controllers\Category;


use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\CategoryRequest;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Services\uploadFileService;
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
        return view('admin.category.index')->with('getAll',$getAll);
    }

    public function show(){
        return view('admin.category.add');
    }

    public function store(CategoryRequest $request){
        $image = $request->file('url_picture');
        $all = $request->all();
        $all['url_picture'] = 'img/news/'.$image->getClientOriginalName('url_picture');
        uploadFileService::handleImg($image,$all['url_picture']);
        $store =  $this->categoryRepository->create($all);
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
        $image = $request->file('url_picture');
        $all =$request->all();
        $all['url_picture'] = 'img/news/'.$image->getClientOriginalName('url_picture');
        uploadFileService::handleImg($image,$all['url_picture']);
       $update = $this->categoryRepository->update($id,$all);
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
