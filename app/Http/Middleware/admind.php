<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class admind
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
    //     if (!Auth::user()->role == 1) {
    //         return redirect('/');
    //     }
        if(Auth::check()){
            if(auth::user()->role == 1){
                return $next($request);
            }
            else{
                return back();
            }

        }
        else{
            return redirect('login');
        }

        // return $next($request);
    }
}
