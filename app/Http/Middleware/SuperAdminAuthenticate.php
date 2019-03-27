<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Admin;

class SuperAdminAuthenticate
{
    /**
     * Check if auth user is Super Admin or $request->id is his
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id =  $request->route('admin');
        if (auth()->guard('admin')->user()->id != $id
            && auth()->guard('admin')->user()->type != Admin::SUPER_ADMIN) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
