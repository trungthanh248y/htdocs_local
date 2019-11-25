<?php

namespace App\Http\Middleware;

use Closure;

class EmployessCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)//Có thể thêm đối số $role(ngoài route ->middleware(role:a) với a là 1 biến)
    {
        return $next($request);
    }
    public function terminate($request, $response)//có thể thêm phần này, hoạt động sau khi đã check song handle
    {
        // Store the session data...
    }
}
