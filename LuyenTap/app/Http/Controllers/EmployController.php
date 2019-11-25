<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Employes;
use App\Model\Student;
use Illuminate\Http\Response;


class EmployController extends Controller
{
    //
    public function index(){
        $employ=Employes::all();
        $student=Student::all();
        $ht=Employes::find();
        return view('layout.home',compact('student','employ'));
    }



    public function btAjax($id){
        if($id!=null){
            $ajax=Student::where('employess_id', $id)->get()>toJson();;
        }
        $employ=Employes::all();
        return Response::json($ajax,$employ);
        //return view('uploadImage.btLonAjax',compact('ajax','employ'));
    }
}
