<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminACL
{
    
    public function handle(Request $request, Closure $next)
    {

    if(auth()->check() && auth()->user()->admin){
            return $next($request);
    }
    dd('Sem acesso de admin');
    }
}
