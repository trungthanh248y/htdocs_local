<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Studet;
use App\Model\Empoloyess;

class StudentControl extends Controller
{
    //
    public function index(){
        $students=Studet::all();
        return view('students.index',compact('students'));
    }
    public function add(Request $request){
        $employ=Empoloyess::all();
        if($request->username){
            $student=new Studet;
            $student->students=$request->username;
            $student->count=$request->count;
            $student->id_employ=$request->id_employ;
            $student->save();
        }
        return view('students.add',compact('employ'));
    }
}
