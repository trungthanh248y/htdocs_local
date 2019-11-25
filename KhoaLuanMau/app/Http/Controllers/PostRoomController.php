<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Post;
use App\Item;
use App\Meeting;
use App\Temp;

class PostRoomController extends Controller
{
    //
    public function index(){
        $rooms=Room::paginate(6);
        return view('PostRoom.select',compact('rooms'));
    }
    public function edit($id){
        $rooms=Room::find($id);
        $temps=Room::find($id)->items()->get();
        $sub_temps=[];
        foreach ($temps as $item){
            $sub_temps[]=$item['id'];
        }
        $temp=Item::all();
        return view('PostRoom.edit',compact('rooms','temp','sub_temps'));
    }
    public function editSubmit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10',
//            'image' => 'required',
//            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $rooms=Room::find($id);
        $posts=new Post();
        if ($request->title) {

            $posts->title = $request->get('title');
            $posts->address = $request->get('address');
            $posts->acreage = $request->get('acreage');
            $posts->describe = $request->get('describe');

//            $posts->item = $request->get('item');


            $posts->content = $request->get('content');
            if($request->hasFile('image')){
                $image = $request->file('image');
                $filename = $image->getClientOriginalName();
                $location = $image->move(public_path() . '/images/', $filename);
                $posts->image=$filename;
            }
            else{
                $posts->image=$rooms->image;
            }

//            $deleteImage = $rooms->image;
//            $rooms->image = $filename;
//            Storage::delete($deleteImage);
            if ($posts->save()) {
                $temps=Post::find($posts->id)->items()->sync($request->get('item'));
                $mess = "Add success";
                $rooms->title=$request->get('title');
                $rooms->address=$request->get('address');
                $rooms->acreage=$request->get('acreage');
                $rooms->describe=$request->get('describe');
                $temps=Room::find($id)->items()->sync($request->get('item'));
                $rooms->content=$request->get('content');
                if($request->hasFile('image')) {
                    $rooms->image = $request->file('image')->getClientOriginalName();
                }
                $rooms->save();
            }
            return redirect()->route('editPostRoom',compact('rooms'))->with('mess', $mess);
        }
    }
    public function delete(Request $request)
    {
        //dd($request);
        $delete=Room::find($request->get('id'))->delete();
        $mess="";
        if($delete){
            $mess="Delete victory";
        }
        return redirect()->Route('indexPostRomm')->with('mess',$mess);
    }




    public function chatAdmin(){
        return redirect('http://localhost/KhoaLuanMau/staff.php');
    }
}
