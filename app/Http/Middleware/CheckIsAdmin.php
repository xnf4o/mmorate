<?php

namespace MMORATE\Http\Middleware;

use Closure;
use MMORATE\User;

class CheckIsAdmin
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
        if (\Auth::user() &&  \Auth::user()->role == User::USER_ADMIN) {
            return $next($request);
        }

        return redirect()->route('404');
    }
}
