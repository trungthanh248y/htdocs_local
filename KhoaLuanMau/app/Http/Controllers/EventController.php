<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    //
    public function addGetEvent(){
        return view("Events.add");
    }
    public function addEvent(Request $request){
        $this->validate($request, [
            'name'=>'required|min:5',
            'content'=>'required|min:5',
            'end_time'=>'required',
            'start_time'=>'required',
        ]);

        $events=new Event();
        $mess="";
        if($request->get('name')){
            $events->name=$request->get('name');
            $events->content=$request->get('content');
            $events->end_time=$request->get('end_time');
            $events->start_time=$request->get('start_time');
            if($events->save()){
                $mess="Add success";
            }
            return redirect()->route('addEvent')->with('mess',$mess);
        }
    }
    public function getEdittEvent($id){
        $events=Event::find($id);
        return view('Events.edit',compact('events'));
    }
    public function edittEvent(Request $request,$id){
        $this->validate($request, [
            'name'=>'required|min:5',
            'content'=>'required|min:5',
            'end_time'=>'required',
            'start_time'=>'required',
        ]);
        $events=Event::find($id);
        if($request->get('name')) {
            $events->name = $request->get('name');
            $events->content = $request->get('content');
            $events->end_time = $request->get('end_time');
            $events->start_time = $request->get('start_time');
            if ($events->save()) {
                $mess = "Add success";
            }
            return redirect()->route('getEdittEvent', compact('events'))->with('mess', $mess);
        }
    }
    public function deleteEvent(Request $request){
        $delete=Event::find($request->id)->delete();
        $mess="";
        if($delete){
            $mess="Delete victory";
        }
        return redirect()->route('selectPost')->with('mess',$mess);
    }



    public function checkEvent(Request $request){
        $this->validate($request,[
           'eventCheck'=>'required',
           'postCheck'=>'required',
        ]);
        $mess="";
        if ($request->get('eventCheck'));
        $eventCheck=$request->get('eventCheck');
        foreach ($eventCheck as $events){
            $event=Event::find($events);
            if($event->posts()->sync($request->get('postCheck'))){
                $mess="Add Event victory";
            }
        }
        return redirect()->route('selectPost')->with('mess',$mess);
    }
}
