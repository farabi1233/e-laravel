<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     if (Auth::user()->usertype  == 'Admin') {
        //         return redirect('/home');
        //     } elseif (Auth::user()->usertype == 'customer') {
        //         return redirect('/');
        //     }
        // }
        // return $next($request);
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
        

    }
}
