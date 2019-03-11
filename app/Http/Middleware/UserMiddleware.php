<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Auth;

class UserMiddleware
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
        if (Auth::user() && $request->user()->role_id == 3 )
        {
        return redirect()->guest('dashboardu');
        }
        return $next($request);
    }
}
