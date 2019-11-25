<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public $categories;
    public function __construct()
    {
        $categories=new Category();
    }

    //
    public function index(){
        $categories=Category::all();
        $posts=Post::all();
        return view('categories.index',compact('categories','posts'));
    }
//    public function create(){
//        $posts=Post::all();
//        return view('categories.add', compact('posts'));
//    }
//    public function store(Request $request){
//        $categories=new Category();
//        if($request->get('name')){
//            $categories->name=$request->get('name');
////            dd($request->get('checkPost'));
//            $categories->save();
//            $Cate=Category::find($categories->id)->posts();
//            dd($Cate);
//            dd($Cate->sync($request->get('checkPost')));
////            dd($categories->id);
//            return 'aaaa';//redirect('category/add')
//        }
//    }


    public function checkCategory(Request $request){
        $ids=$request->get('cateCheck');
//        dd($categories);
        foreach ($ids as $id)
        {
            $categories=Category::find($id);
            $categories->posts()->sync($request->get('postCheck'));
        }
//        $posts=$request->get('postCheck');
//        dd($categories,$posts);
        return redirect('category/index');
    }
}
