<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Image;
use App\Http\Requests\ReuquestImage;
// use Images;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
    ////Kiểm tra file xem đã có ảnh hay chưa (tìm kiếm hasfile trên laravel request)
    public function create(){
        return view('uploadImage.create');
    }
    public function store(Request $request){
        $this->validate($request, [

            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        if($request->hasfile('filename'))
        {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalExtension();//Lấy về  đuôi xem là .gì(vd: .png, .jpg)
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
        }

        $form= new Image();
        $form->filename=json_encode($data);
        
        
        $form->save();

        return back()->with('success', 'Your images has been successfully');
    }
    public function index(){
        $image=Image::all();
        return view('uploadImage.indexImage',compact("image"));
    }
    public function ajax(){
        return view('uploadImage.ajax');
    }
    public function ajax2(Request $request){
        $i=$request->i;
        $t=$request->t;
//        $image=Image::find($request->id);
        return view('uploadImage.ajax2',compact('i','t'));
    }
//    public function js(){
//        return view(public_path().'/js/test');
//    }


    public function upLoadImage()
    {
        return view('uploadImage.upLoadImage');
    }
    public function stortImage(Request $request)
    {
        $images=new Image;
        // $this->validate($request, [

        //     'filename' => 'required',
        //     'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        // ]);
        if($request->hasfile('filename')){
            $image=$request->file('filename');
            $today = Carbon::today();
            //time().'.'.
            $filename=$image->getClientOriginalName();//getClientOriginalExtension,getClientOriginalName
            $location=$image->move(public_path().'/image/',$filename);
            dd($location);
            //dd($filename);
            // Storage::get($filename);
            // return Storage::download($filename);
            // $url = Storage::url($location);//Tạo một đường dẫn như location trong file
            //Storage::put($location, $filename);//Tạo một đường dẫn như location trong file
            // Images::make($image)->resize(800,400)->save($location);
            //putFile để tạo 1 file chỉ định đến một thư mục được chỉ định
            // $path = $location->store('image','public');
            // $path = $request->file('avatar')->storeAs(
            //     'avatars', $filename
            // );//Dung cho Update
            $images->filename=$filename;
            //$images->save();
        }
        return view('uploadImage.upLoadImage');
    }
}
