<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
	private $userTypeRedirects = [
		"admin" => "admin.dashboard",
		"franchise" => "franchise.dashboard",
		"client" => "inici"
	];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(route($this->userTypeRedirects[Auth::user()->typeuser->name]));
        }

        return $next($request);
    }
}
