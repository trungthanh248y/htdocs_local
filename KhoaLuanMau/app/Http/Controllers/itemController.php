<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class itemController extends Controller
{
    //
    public function index(){
        $items=Item::all();
        return view('Items.select',compact('items'));
    }

    public function add(){
        return view('Items.add');
    }
    public function addSub(Request $request){
        $this->validate($request, [
            'item'=>'required',
        ]);

        $items=new Item();
        $mess="";
        if($request->get('item')){
            $items->item=$request->get('item');
            if($items->save()){
                $mess="Add success";
            }
        }
        return redirect()->route('addItem')->with('mess',$mess);

    }

    public function edit($id){
        $items=Item::find($id);
        return view('Items.edit',compact('items'));
    }

    public function editSub(Request $request, $id){
        $this->validate($request, [
            'item'=>'required',
        ]);
        $items=Item::find($id);
        if($request->get('item')) {
            $items->item = $request->get('item');
            if ($items->save()) {
                $mess = "Add success";
            }
        }
        return redirect()->route('editItemSub', compact('items'))->with('mess', $mess);
    }

    public function delete(Request $request){
        $delete=Item::find($request->id)->delete();
        $mess="";
        if($delete){
            $mess="Delete victory";
        }
        return redirect()->route('itemIndex')->with('mess',$mess);
    }
}
