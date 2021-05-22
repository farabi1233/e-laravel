<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class Test
{
    
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->usertype =='Admin'){
            return $next($request);
        
        }
       
        else{
           return redirect()->back();
           
        }
        
    }
}
