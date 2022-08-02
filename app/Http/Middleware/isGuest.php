<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class isGuest
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
        if (Auth::User()->role->name==="Guest") {

            return $next($request);
        }

        return redirect('/Not-Allowed');

    }
}
