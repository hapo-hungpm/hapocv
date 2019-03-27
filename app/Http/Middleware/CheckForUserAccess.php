<?php

namespace App\Http\Middleware;

use Closure;

class CheckForUserAccess
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
        $id =  $request->route('user');
        if (!auth()->guard('admin')->check()
            && auth()->user()->id != $id) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
