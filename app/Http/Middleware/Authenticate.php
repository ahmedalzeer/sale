<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('authorized.', 200);
            } else {
                return redirect()->guest('auth/login');
            }
        }

        return $next($request)->header('Access-Control-Allow-Origin','*')
            ->header('Access-Control-Allow-Methods','GET,POST,PUT,PATCH,DELETE,OPTIONS')
            ->header('Access-Control-Allow-Headers','Content-Type,Authorization');

    }
}
