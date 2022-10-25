<?php

namespace App\Http\Middleware;

use Closure;
use App;
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
        // dd(session()->get('locale'));
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
          
        return $next($request);
    }
}
