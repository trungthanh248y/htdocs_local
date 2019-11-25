<?php

namespace App\Http\Controllers;

// require 'vendor/autoload.php';
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Event;
use App\Item;
use App\Http\Requests\Posts;
use Intervention\Image\ImageManagerStatic as Images;
use Illuminate\Support\Facades\DB;


class ControllerPosts extends Controller
{
    //
    public function addGetPost(){
        $items=Item::all();
        return view('posts.index',compact('items'));
    }
//    public function resize($width,$height,$image) {
//        $new_image = imagecreatetruecolor($width, $height);
//        imagecopyresampled($new_image, $image, 0, 0, $width, $height);
//        $image = $new_image;
//    }
    public function addPost(Request $request){
        /*Nếu sử dụng file request để check validate cho file thì sẽ k được, vì chúng ta chỉ
        kiểm tra tồn tại của file chứ k check nội dung file*/
        $this->validate($request, [
            'title'=>'required|min:5',
            'address'=>'required',
            'acreage'=>'required',
            'describe'=>'required|min:5',
            'item'=>'required',
            'content'=>'required|min:10',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $posts=new Post;
        $mess="";
        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=$image->getClientOriginalName();
            // Images::configure(array('driver' => 'imagick'));
            // dd(Images::make($filename)->resize(300,100));
            $location=$image->move(public_path().'/images/',$filename);

            $posts->title=$request->get('title');
            $posts->address=$request->get('address');
            $posts->acreage=$request->get('acreage');
            $posts->describe=$request->get('describe');
            $posts->sale=$request->get('sale');
//            $posts->item=$request->get('item');
            $posts->content=$request->get('content');
            $posts->image=$filename;
            if($posts->save()){
                $mess="Add success";
                $temp=Post::find($posts->id);
                $temp->items()->sync($request->get('item'));
            }
            return redirect()->route('addPost')->with('mess',$mess);
        }
    }
    public function selectPost(){
        $events=Event::all();
        $posts=Post::all();
        return view('posts.select',compact('posts','events'));
    }
    
    public function getEdittPost($id){
        $posts=Post::find($id);
        $temps=Post::find($id)->items()->get();
        $sub_temps=[];
        foreach ($temps as $item){
            $sub_temps[]=$item['id'];
        }
        $items=Item::all();
        return view('posts.edit',compact('posts','sub_temps','items'));
    }
    public function edittPost(Request $request,$id){
        $this->validate($request, [
            'title'=>'required|min:5',
            'content'=>'required|min:10',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $posts=Post::find($id);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=$image->getClientOriginalName();
            $location=$image->move(public_path().'/images/',$filename);

            $posts->title=$request->get('title');
            $posts->address=$request->get('address');
            $posts->acreage=$request->get('acreage');
            $posts->describe=$request->get('describe');
            $posts->sale=$request->get('sale');
//            $posts->item=$request->get('item');
            $posts->content=$request->get('content');

            $deleteImage=$posts->image;
            $posts->image=$filename;
            Storage::delete($deleteImage);
            if($posts->save()){
                $temps=Post::find($id)->items()->sync($request->get('item'));
                $mess="Add success";
            }
            return redirect()->route('getEdittPost',compact('posts'))->with('mess',$mess);
        }
    }
    public function deletePost(Request $request)
    {
        //dd($request);
        $delete=Post::find($request->get('id'))->delete();
        $mess="";
        if($delete){
            $mess="Delete victory";
        }
        return redirect()->Route('selectPost')->with('mess',$mess);
    }

}
