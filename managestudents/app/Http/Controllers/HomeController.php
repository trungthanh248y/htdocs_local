<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Student;

class HomeController extends Controller
{
    //
    public function index(Request $request){
        $i=$request->session()->get('groups');
        var_dump(isset($i)?($request->session()->get('groups')):[]);
        $students=Student::all();
        $groups=Group::all();
        return view('layout.home',compact('students','groups'));
    }

    public function postSeesion(Request $request){
        $i[]=($request->session()->get('ck_group'));
        $ck_group=$request->groups_id;
//        dd($request->get('check_group'));
        $temp[]=$request->check_group;
        dd($temp);
        $request->session()->put('groups',$temp);
        // foreach ($temp as $key => $value) {
        //     $students=Student::find($value);
        //     $students->groups_id=$ck_group;
        //     $students->save();
        // }
        // $groups=Group::find($ck_group);
        // return view('layout.session',compact('groups'));
        // //dd($temp);

    }
    public function getSession(){
        return view('layout.session');
    }
}
