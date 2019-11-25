<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Group;
use App\Student;
use App\Http\Requests\GroupRequest;

class GroupController extends Controller
{
    //
    public function create(){
        return view('groups.add');
    }
    public function store(GroupRequest $request){
        $groups=new Group();
        $mess="";
        if($request->name){
            $groups->name=$request->name;
            $groups->major=$request->major;
            if($groups->save()){
                return redirect()->route('home')->with('mess','SUSSET VICTORY');
            }
        }
    }
    public function getEditGroup($id){
        $groups=Group::find($id);
        return view('groups.edit',compact('groups'));
    }
    public function EditGroup(GroupRequest $request, $id){
        $groups=Group::find($id);
        $edit="";
        if($request->name){
            $groups->name=$request->name;
            $groups->major=$request->major;
            if($groups->save()){
                return redirect()->Route('getEditGroup',compact('groups'))->with('edit','SUCCET VICTORY');
            }
        }
    }
    public function deleteGroup(Request $request){
        $delete=Group::find($request->id_group)->delete();
        return redirect()->Route('home')->with('messDelete','Delete Success');
    }
    public function ajax(Request $request){
        $students=Student::where('groups_id',$request->id)->get();
        //$students=Group::find($request->get('id'))->students;//students là bảng kết nối trong Model
        //dd($students);
        echo view('groups.ajax',compact('students'));
        // return response()->json(['id'=>$request->get('id')]);
        exit;
    }
    // //Phan trang
    // public function ajaxVd2(Request $request){
    //     $sotin1trang=5;
    //     $trang=(int)$request->trang;
    //     $form=($trang-1)*$sotin1trang;//Với $trang là session thay đổi áp dụng để làm phân trang
    //     $ajax2=DB::table('groups')->offset($trang)->limit($sotin1trang)->get();;
    //     /*code có nghĩa: với mỗi lần quận truột với số tin = $sotin1trang thì sẽ trả về một
    //     $trang. Từ biến $trang này để load tiếp trang, bài mới cho người dùng chứ k cần nhấn
    //     nút nữa. Sử dụng ORDER_BY ... ASC và linit để sắp xếp lấy theo công thức
    //     $form=($trang-1)*$sotin1trang;*/
    //     echo view('groups.ajaxVd2',compact('ajax2'));
    // }
}
