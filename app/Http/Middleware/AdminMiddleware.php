<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    // по умаолчанию:
/*     public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    } */

    // С Response:
/*     public function handle(Request $request, Closure $next): Response
    {
        if ($this->isAdmin($request)) {  // если пользователь активен скрипт двигается дальше
            return $next($request);
        }

        abort(403); // прекращает выполнение и возвращает ответ 403
    }

    // проверка на активность пользователя
    protected function isAdmin(Request $request)
    {
        return false;
    } */

    // Без Response:
    public function handle(Request $request, Closure $next): Response
    {
        if ($this->isAdmin($request)) {  // если пользователь активен скрипт двигается дальше
            return $next($request);
        }

        abort(403); // прекращает выполнение и возвращает ответ 403
    }

    // проверка на активность пользователя
    protected function isAdmin(Request $request)
    {
        return false;
    }
}
