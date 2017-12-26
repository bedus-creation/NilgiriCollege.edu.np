<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user() && Auth::user()->type=="Admin"){
            return $next($request);
        }else if(Auth::check()){
            $request->session()->flash('flash_message','Sorry your account in in pending condition !');
            return redirect(Url('auth/logout'));
        }
        return redirect(Url('auth/login'));
    }
}
