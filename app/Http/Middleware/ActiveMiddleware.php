<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     // по умолчанию:
/*     public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    } */

    public function handle(Request $request, Closure $next): Response
    {
        if ($this->isActive($request)) {  // если пользователь активен скрипт двигается дальше
            return $next($request);
        }

        abort(403); // прекращает выполнение и возвращает ответ 403
    }

    // проверка на активность пользователя
    protected function isActive(Request $request)
    {
        return true;
    }
}
