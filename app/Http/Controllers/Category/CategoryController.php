<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Contry;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Movie;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Type_movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    //
    protected $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository){
        return $this->categoryRepository =$categoryRepository;
    }
    public function pages($id){
        // HEADER
        $menu = Menu::all();
        $film_hot = Movie::where('film_hot','=',1)->limit(4)->get();
        $film_hot1 = Movie::where('view','>',200)->limit(1)->get();
        // FOOTER
        $new = Movie::select('*')->orderby('created_at','Desc')->limit(9)->get();
        $category = Category::all();
        $movies = Movie::where('view','>',10)->orderBy('view','Desc')->limit(3)->get();
        // MAIN
        $cate = Category::find($id);
        View::share('key', $cate);
        $view = Movie::where('view','>',100)->orderBy('view','Desc')->limit(6)->get();
        $theloai = Movie::where('categories_id',$id)->paginate(9);
        return view('user.pages.category')->with([
            'category'=>$category,
            'film_hot'=>$film_hot,
            'film_hot1'=>$film_hot1,
            'menu'=>$menu,
            'view'=>$view,
            'movies'=>$movies,
            'theloai'=>$theloai,
            'cate'=>$cate,
            'new'=>$new,
        ]);
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
    public function store(Request $request){
        try {
            $check = Category::where('name',$request->name)->first();
            if($check){
                return redirect()->route('admin.category.add')->with('success',' Thể Loại '.$request->name.' Đã Tồn Tại');
            }else{
                $created = $this->categoryRepository->create($request->input());
                if($created->save()){
                    return redirect()->route('admin.category.index')->with('success','Thêm Thể Loại '.$request->name.' Thành Công');
                }
            }
        } catch (\Throwable $th) {
            return redirect()->route('admin.category.add')->with('success','Thêm Thể Loại '.$request->name.'Thất Bại');
        }
    }
    public function edit($id){
        $category = $this->categoryRepository->find($id);
        return view('admin.category.edit')->with(['movie'=>$category]);
    }
    public function update($id , Request $request){
            try {
                $update = $this->categoryRepository->update($id,$request->input());
                if($update->save()){
                    return redirect()->route('admin.category.index')->with('success','Sửa '.$request->title.' Thành Công');
                }
            } catch (\Throwable $th) {
                return redirect()->route('admin.category.index')->with('success','Sửa '.$request->title.' Thất Bại');
            }
    }
    public function destroy($id){
        $this->categoryRepository->delete($id);
        return redirect()->route('admin.category.index')->with('success', ' Xóa Thành Công');
    }
}
