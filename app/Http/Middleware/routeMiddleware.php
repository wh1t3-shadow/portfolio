<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class routeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth::check()) {
           if (auth::user()->role==1) {
            return $next($request);
           }
           else{
            return back()->with('dont','you dont have admin permition');

           }
        }
        // return $next($request);
        else{
            return redirect('/login')->with('msz','login fast');
        }
    }
}
