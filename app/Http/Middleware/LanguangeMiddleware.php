<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Support\Facades\DB;

class LanguangeMiddleware
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
        App::setLocale(DB::table('tutapos_settings')->where('id', 1)->first()->language);
        return $next($request);
    }
}
