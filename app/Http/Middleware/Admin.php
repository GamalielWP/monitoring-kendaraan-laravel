<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if (session()->has('role')) {

            if (Auth::user()->role->nama_role == "Admin") {
                return $next($request);
            }
            else {
                return back();
            }

        } else {
            return redirect('/');
        }
    }
}
