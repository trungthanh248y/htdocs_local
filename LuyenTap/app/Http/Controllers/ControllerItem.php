<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Post;

class ControllerItem extends Controller
{
    //
    public function index(){
        $posts=Post::all();

//        foreach ($posts as $sub_post){
//            $item_check=Post::find($sub_post->id)->items()->get();
//            $subject_id=[];
//            foreach ($item_check as $item){
//                $subject_id[]=$item['id'];
//            }
//            return view('Items.index',compact('posts','items','subject_id'));
//        }
        return view('Items.index',compact('posts'));
    }
}
