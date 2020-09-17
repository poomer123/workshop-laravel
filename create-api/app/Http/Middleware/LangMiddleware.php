<?php

namespace App\Http\Middleware;

use Closure;

class LangMiddleware
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
        $queryString = request()->query();

        // dd($queryString);
        
        if(isset($queryString['lang'])) {
            app()->setlocale($queryString['lang']);
        }else {
            app()->setlocale('en');
        }

        return $next($request);
    }
}