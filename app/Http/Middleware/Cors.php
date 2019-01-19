<?php

namespace Coop\Http\Middleware;

use Closure;

class Cors
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
        return $next($request)
                ->header('Access-Control-Allow-Origin', '*')
                ->header('Access-Control-Allow-Origin:  http://127.0.0.1:4500')
                ->header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization')
                ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}
