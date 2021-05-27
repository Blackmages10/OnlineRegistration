<?php

namespace App\Http\Middleware;

use Closure;
uSE Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->is_admin==1){
            return $next($request);
        }else{
            return redirect('home');
        }
        if(!Auth::check()){
            return $next($request);
        }

    }
}
