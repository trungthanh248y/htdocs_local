<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Room;
use App\User;
use App\Temp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RoomsController extends Controller
{
    //
    public function selectRoom(){
        $rooms=DB::table('rooms')->where('admin_id','=',Auth::user()->id)->get();//User::find(Auth::user()->id)->rooms()
//        foreach ($rooms as $room)
//            dd($room->title);

        return view('rooms.select',compact('rooms'));
    }
    public function addRoom(){
        $items=Item::all();
        return view('rooms.add',compact('items'));
    }
    public function addRoomSubmit(Request $request){
        $this->validate($request, [
            'title'=>'required|min:5',
            'address'=>'required|min:5',
            'acreage'=>'required',
            'describe'=>'required|min:5',
            'item'=>'required',
            'content'=>'required|min:10',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $rooms=new Room();
        $mess="";
        if($request->btn_sub){
            $rooms->title=$request->get('title');
            $rooms->address=$request->get('address');
            $rooms->acreage=$request->get('acreage');
            $rooms->describe=$request->get('describe');

            //$rooms->item=serialize($request->item);

            $rooms->content=$request->get('content');

            $rooms->image=$request->get('image');

            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = $image->getClientOriginalName();
                $location = $image->move(public_path() . '/images/', $filename);
                $rooms->image=$filename;
            }

            $rooms->admin_id=Auth::user()->id;
            if($rooms->save()){
                $mess="ADD success";
                $temp=Room::find($rooms->id);
                $temp->items()->sync($request->get('item'));
            }
        }
        return redirect()->route('addRoom')->with('mess',$mess);
    }
    public function editRoom($id){
        $temps=Room::find($id)->items()->get();
        $sub_temps=[];
        foreach ($temps as $item){
            $sub_temps[]=$item['id'];
        }
        $rooms=Room::find($id);
        $temp=Item::all();
        return view('rooms.edit',compact('rooms','sub_temps','temp'));
    }
    public function editRoomSubmit(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'address'=>'required|min:5',
            'acreage'=>'required',
            'describe'=>'required|min:5',
            'item'=>'required',
            'content' => 'required|min:10',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $rooms = Room::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $location = $image->move(public_path() . '/images/', $filename);

            $rooms->title = $request->get('title');
            $rooms->address=$request->get('address');
            $rooms->acreage=$request->get('acreage');
            $rooms->describe=$request->get('describe');

//            $rooms->item=$request->get('item');

            $rooms->content = $request->get('content');

            $deleteImage = $rooms->image;
            $rooms->image = $filename;
            Storage::delete($deleteImage);
            if ($rooms->save()) {
                $temps=Room::find($id)->items()->sync($request->get('item'));
                $mess = "Add success";
            }
            return redirect()->route('selectRoom')->with('mess', $mess);
        }
    }
    public function deleteRoom(Request $request)
    {
        //dd($request);
        $delete=Room::find($request->get('id'))->delete();
        $mess="";
        if($delete){
            $mess="Delete victory";
        }
        return redirect()->Route('selectRoom')->with('mess',$mess);
    }



}
