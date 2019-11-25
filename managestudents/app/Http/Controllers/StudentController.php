<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Group;
use App\Student;
use App\Subject;

class StudentController extends Controller
{
    //
    public function __construct()
    {
        $this->groups=Group::all();
        $this->subjects=Subject::all();
    }

    public $groups;
    public $subjects;
    public function create(){
        $groups=Group::all();
        return view('students.add',compact('groups'));
    }
    public function store(StudentRequest $request){
        $students=new Student;
        $messe="";
        //dd($users = DB::table('students')->where('id', '=', 1)->select('fullname')->get());
        if($request->username){
            $students->username=$request->username;
            $students->fullname=$request->fullname;
            $students->address=Group::find($request->groups_id)->name;
            $students->email=$request->email;
            $students->groups_id=Group::find($request->groups_id)->id;
            if($students->save()){
                $messe="sussecc victory";
            }
            return redirect()->route('home')->with('messe',$messe);
        }
    }
    public function getEditStudent($id){
        $students=Student::find($id);
        $groups=Group::all();
        $subjects=$this->subjects;
        //Lấy tất cả các subjects được liên kết với students trong bảng student_subjects
        $student_subject=$students->subjects()->get()->toArray();
//        dd($student_subject);
        $subjects_id=[];
//        dd($students->subjects);
        foreach ($student_subject as $item){
            $subjects_id[]=$item['id'];
        }
//        dd($subjects_id);
        return view('students.edit',compact('students','groups','subjects','subjects_id'));
    }
    public function editStudent(StudentRequest $request,$id){
        $students=Student::find($id);
        $groups=Group::all();
        $messStudent="";
        if($request->username){
            $students->username=$request->username;
            $students->fullname=$request->fullname;
            $students->address=Group::find($request->groups_id)->name;
            $students->email=$request->email;
            $students->groups_id=Group::find($request->groups_id)->id;

//            dd($students->subjects);
//            dd($request->subject);
            $students->subjects()->sync($request->subject);
            $subjects=$this->subjects;
            //Lấy tất cả các subjects được liên kết với students trong bảng student_subjects
            $student_subject=$students->subjects()->get()->toArray();
            $subjects_id=[];
            foreach ($student_subject as $item){
                $subjects_id[]=$item['id'];
            }


            if($students->save()){
                $messStudent="sussec victory";
            }
            return view('students.edit',compact('students','groups','subjects','subjects_id'));
        }
    }
    public function delete(Request $request)
    {
        $delete=Student::find($request->id_student)->delete();
        return redirect()->Route('home')->with('deleteStudent','Delete success');
    }
    public function getSubjects(){
        $students=Student::find(9)->subjects()->orderBy('id')->get();//->subjects()
//        dd($students->subjects);//Kiển tra xem đã thiết lập liên k
        foreach ($students as $subject){
            echo $subject->name."<br>";
        }
        return "studen id=9";
    }
}
