<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        switch ($guard) {
            case 'admin':
                if(Auth::guard($guard)->check()){//để chắc chắn nếu đúng là quyền admin ms chạy
                    return redirect()->route('admin.dashboard');
                }
                break;
            
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');//Kiểm tra đăng nhập và chuyển hướng về home
                }
                break;
        }

        return $next($request);// Yêu tiếp theo
    }
}
