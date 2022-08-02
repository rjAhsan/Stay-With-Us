<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class activeUser
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
        if (Auth::User()->active==1) {

            return $next($request);
        }

        return redirect('/Not-Allowed');
    }
}
