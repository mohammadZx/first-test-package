<?php

namespace Smd\Cms\Http\Middleware;
use Illuminate\Http\Request;
use Closure;
class Admin
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        
        if(3 != 3){
            die('non');
        }
        return $next($request);
    }
}
