<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReaquestLogin;

class LoginController extends Controller
{
    //
    public function login(){
        return view('home.login');
    }
    public function postLogin(ReaquestLogin $request){
        return dd($request);
        // if($request->)
    }
    public function register(){
        return view('home.register');
    }
    public function postRegister(Request $request){
        dd($request);
    }
}
