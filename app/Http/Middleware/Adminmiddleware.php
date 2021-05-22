<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Adminmiddleware
{
    
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->usertype =='Admin'){
           return $next($request);
            //dd('admin login');

        
        }
       
        else{
           return redirect()->back();
          //dd('admin  not login');
           
        }
        
    }
}
