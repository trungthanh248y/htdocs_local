<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerUser extends Controller
{
    //
    public function chat(){
        return redirect('http://localhost/WebChat/');
    }
    public function chatAdmin(){
        return redirect('http://localhost/WebChat/staff.php');
    }
}
