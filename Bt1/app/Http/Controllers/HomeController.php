<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentFormRequest;
use App\Http\Requests\StudentEditFormRequest;

class HomeController extends Controller
{
    //
    public function index(Request $request){
        $students=Student::all();
        echo $request->session()->push('updateStudent','mess');
        return view('student.home',compact('students'));
    }
    public function getUpdate($id,Request $request){
        $students=Student::find($id);
        //        session(['mess'=>'']);
        return view('student.edit',compact('students'));
    }
    public function Update(StudentEditFormRequest $request, $id){
        $students=Student::find($id);
        if($request->username){
            $students->username=$request->username;
            $students->firstname=$request->firstname;
            $students->lastname=$request->lastname;
            $students->address=$request->address;
            if($students->save()){
                $mess=0;
                echo $request->session()->get('mess',$mess++);
            }
//                session('mess','edit');
            return redirect()->route('updateStudent',compact('students'))->with('mess','edit thanh cong');
        }
    }
    public function create(Request $request){
//        Lần 1: Chỉ thêm và k có validate
//        $students=new Student;
//        $mess="";
//        if($request->username) {
//            $students->username = $request->username;
//            $students->firstname = $request->firstname;
//            $students->lastname = $request->lastname;
//            $students->address = $request->address;
//            $students->save();
//            $mess='Add thanh cong';
//        }
//        return view('student.add',compact('mess'));
//        Lần 2: Thêm với validate ở controll
//        if($request->username){
////            $this->validate($request,
//            $validate=Validator::make($request->all(),[
//                'username'=>'required|min:6',
////                |unique:Student,username
//                'firstname'=>'required',
//                'lastname'=>'required',
//                'address'=>'required',
//            ]);
//            if($validate->failed()){
//                return redirect()->route('updateStudent')->withErrors($validate)->withInput();
//            }
//        }
        return view('student.add');
    }
    public function stort(StudentFormRequest $request){
//        lần 3: Thêm với validate đặt tại file requests
        if($request->get('username')){
            $student = new Student(array(
                'username'=>$request->get('username'),
                'firstname'=>$request->get('firstname'),
                'lastname'=>$request->get('lastname'),
                'address'=>$request->get('address'),
            ));
            $student->save();
            return redirect()->route('index');
        }
    }
    public function destroy($id){
        $students=Student::find($id)->delete();
        return redirect()->route('updateStudent')->with('status','Delete thanh cong!');
    }
}
