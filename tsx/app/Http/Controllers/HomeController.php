<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Routing\Route;

class HomeController extends Controller
{
    //
    public function index()
    {
        $student = Student::all();
        return view('Student.index', compact('student'));
    }

    public function add(Request $request)
    {
        $mess = "";
        if ($request->username) {
            $student = new Student;//tạo một biến lưu chữ vòa model
            $student->username = $request->username;
            $student->firstname = $request->firstname;
            $student->lastname = $request->lastname;
            $student->address = $request->address;
            $student->save();
            $mess = "Them thanh cong";
        }
        return view('Student.add', compact('mess'));
    }

    public function edit(Request $request, $id)
    {
        $student = Student::find($id);//lấy dữ liệu từ csdl theo id truyền vào
        $mess = "";
        if ($request->username) {
            $student->username = $request->username;
            $student->firstname = $request->firstname;
            $student->lastname = $request->lastname;
            $student->address = $request->address;
            $student->save();
            $mess = "Them thanh cong";
        }
        return view('Student.edit', compact('student', 'mess'));
    }
    public function xoa($id){
        $student=Student::find($id)->delete();
        return redirect()->Route('index');
    }
}
