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
        
         if (Auth::guard($guard)->check()) {
            if(Auth::User()->role->name==="Host"){
                return redirect()->intended('/host');
            }
            elseif(Auth::User()->role->name==="Guest"){
                return redirect()->intended('/guest');
            }
            elseif(Auth::User()->role->name==="Admin"){
                return redirect()->intended('/admin');
            }
            else{
                return redirect()->intended('/');
            }
        }
       
        //Original
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

         return $next($request);
    
    }
}
