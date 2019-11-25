<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Http\Requests\RequestPost;


class AccountController extends Controller
{
    //
    public function index(){
        $posts=Post::all();
        return view('Admin.AdminSelect',compact('posts'));
    }
    public function select(){
        return view();
    }
    public function add(){
        return view('Admin.add');
    }
    public function addSubmit(RequestPost $request){
        $this->validate($request, [
           'image'=>'required',
           'title'=>'required',
           'content'=>'required',
           'author_id'=>'required',
           'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $posts=new Post();
        $mess="";
        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=$image->getClientOriginalName();
            $local=$image->move(public_path().'/image/',$filename);
            $posts->image=$filename;
            $posts->title=$request->get('title');
            $posts->content=$request->get('content');
            $posts->author_id=$request->get('author_id');
            if($posts->save()){
                $mess="ADD SUCCESS";
            }
        }
        return redirect()->route('add')->with('mess',$mess);
    }
    public function edit(){
        return view();
    }
    public function editSubmit(){
        return view();
    }
    public function delete(Request $request){
        return view();
    }
}
