<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

class AuthenticateWithTokenAuth
{
    /**
     * 处理传入的请求。
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, $next)
    {

        // return Auth::guard('api')->check() ? $next($request) : "false"; // 报错
        // return Auth::guard('api')->check() ? $next($request) : response()->json(['success' => false]);

        return Auth::guard('api')->check() ? $next($request) : response(['success' => false], 400);
    }

}
