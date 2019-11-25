<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Empoloyess;

class EmployControl extends Controller
{
    //
    public function index(){
        $employ=Empoloyess::all();
        return view('employess.index',compact('employ'));
    }
}
