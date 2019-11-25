<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        //Sẽ k thể gọi đến chức năng logout nếu chưa đăng nhập vì vậy ta cần có đoạn ->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    public function login(Request $request){
        //Validate dữ liệu đầu vào
        $this->validate($request,[
            'email' =>'required|email',
            'password'=>'required|min:6',
        ]);
        //Attempt: cố gắn đăng nhập
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))//một mảng để chuyển email và password qua nó sẽ xác minh mọi yếu tố đăng nhập, $request->remember trả về các lỗi
        {
            //Thành công sẽ vào trang admin và tới nơi được chỉ định
            return redirect()->intended(route('admin.dashboard'));//đi đến link được chỉ định, nếu k có mặc định sẽ vào route('admin.dashboard'))
        }

        //Nếu không thành công sẽ chuyênr hướng quay lại
        return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
