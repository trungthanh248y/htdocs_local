<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Meeting;
use App\Event;
use App\User;
use App\Item;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmailMeeting;

class PostUserController extends Controller
{
    //
    public function search(Request $request){
        $search=$request->search;
        $posts=DB::table('posts')->where('address','like','%'.$search.'%')->orderBy('title', 'desc')->paginate(6);//get()
        return view('PostUser.ajaxSearch',compact('posts','search'));
    }
    public function SearchDetails(Request $request){
        $this->validate($request,[
//            'describe'=>'required',
            'acreage'=>'required'
        ]);
        $describe_start=$request->describe_start;
        $describe_end=$request->describe_end;
        $acreage=$request->acreage;
        $posts=DB::table('posts')->where([
            ['describe','>',$describe_start],
            ['describe','<',$describe_end],
            ['acreage','<',$acreage],
        ])->paginate(6);//get() simplePaginate(6)
        return view('PostUser.ajaxSearchDetail',compact('posts','describe_start','describe_end','acreage'));//PostUser.ajaxSearchDetail, welcome
    }

    public function welcome(){
        $posts=Post::paginate(6);
        $eventsAll=Event::all();
        return view('welcome',compact('posts','eventsAll'));
    }
    public function postUser(Request $request, $id){
        $posts=Post::find($id);
        $events=Event::find(1)->posts()->get();//$posts->events
        $categoris=Post::find($id)->events()->get();

        if(count($categoris)>0){
            foreach ($categoris as $category){
                $species=Event::find($category->id)->posts()->get();
            }
        }
        else{
            $species=$events;
        }
        $items=Item::all();
        $sub_item=[];
        $temps=Post::find($id)->items()->get();
        foreach ($temps as $item){
            $sub_item[]=$item['id'];
        }
        $comments=Post::find($id)->comments()->get();
        return view('PostUser.userPostHome',compact('posts','events','comments','species','items','sub_item'));
    }
    public function chatUser(){
        return redirect('http://localhost/KhoaLuanMau/');
    }
    public function order($id){
        $posts=Post::find($id);
        $events=Event::find(1)->posts;
        return view('PostUser.UserOrder',compact('posts','events'));
    }
    public function orderPost(Request $request,$id){
        $posts=Post::find($id);
        $meeting=new Meeting();
        $mess="";
        if($request->get('username')){
            $meeting->username=$request->get('username');
            $meeting->phone=$request->get('phone');
            $meeting->time=$request->get('time');
            $meeting->title=$request->get('title');
            $meeting->describe=$request->get('describe');
            if($meeting->save()){
                $mess="success victory";
                //Gửi Email
                Mail::to(Auth::user()->email)->send(new EmailMeeting($meeting));

            }
        }
        return redirect()->route('order',$posts->id)->with('mess',$mess);
    }


    public function ajax(Request $request){
        if($request->ajax()){
            $id=$request->id;//Phải truyền id sang vì sang trang(links) 2 thì nó sẽ k còn lưu dc id của event nữa
            $posts=Event::find($id)->posts()->paginate(6);//get()
            return view('PostUser.ajaxEvent',compact('posts','id'));
        }
    }

    public function commnet(Request $request,$id){
        $this->validate($request,[
           'comment'=>'required',
        ]);
        $comments=new Comment();
        $mess="";
        if($request->get('comment')){
            $comments->id_post=$id;
            $comments->id_user=Auth::user()->id;
            $comments->comment=$request->get('comment');
            if($comments->save()){
                $mess="Comment victory";
            }
        }
        return redirect()->route('postUser',compact('id'))->with('mess',$mess);
    }
}
