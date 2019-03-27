<?php

namespace App\Http\Middleware;

use Closure;

class CheckForCvAccess
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
        $id =  $request->route('cv');
        if (!auth()->guard('admin')->check()
            && auth()->user()->cvs()->find($id) == null) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
