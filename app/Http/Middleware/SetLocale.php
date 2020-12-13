<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $lang
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = explode("/", $request->getPathInfo());
        app()->setLocale($locale[1]);
        return $next($request);
    }
}
