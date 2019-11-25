<?php

namespace App\Http\Controllers;
use App\Meeting;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    //
    public function index(){
        $meetings=Meeting::paginate(6);
        return view('Meeting.select',compact('meetings'));
    }
    public function edit($id){
        $meetings=Meeting::find($id);
        return view('Meeting.edit',compact('meetings'));
    }
    public function editSubmit(Request $request,$id){
        $meetings=Meeting::find($id);
        if($request->get('username')){

            $meetings->username=$request->get('username');
            $meetings->phone=$request->get('phone');
            $meetings->time=$request->get('time');
            $meetings->title=$request->get('title');
            $meetings->describe=$request->get('describe');

            if($meetings->save()){
                $mess="Add success";
            }
            return redirect()->route('editMeeting',compact('meetings'))->with('mess',$mess);
        }
    }
    public function delete(Request $request)
    {
        //dd($request);
        $delete=Meeting::find($request->get('id'))->delete();
        $mess="";
        if($delete){
            $mess="Delete victory";
        }
        return redirect()->Route('indexMeeting')->with('mess',$mess);
    }
}
