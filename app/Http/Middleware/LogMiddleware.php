<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


// по умолчанию:
    public function handle(Request $request, Closure $next)//: Response
    {
        info($request->url(), $request->all());
        
        return $next($request);
    }

// Изменил:    
/*     public function handle(Request $request, Closure $next)
    {
        info($request->url(), $request->all());

        return $next($request);
    } */
}
