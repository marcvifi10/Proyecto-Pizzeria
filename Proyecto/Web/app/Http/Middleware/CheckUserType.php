<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserType
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
		$allowedUserTypes = array_slice(func_get_args(), 2);
		if (in_array(Auth::user()->typeuser->name, $allowedUserTypes)) {
			return $next($request);			
        }
		return redirect('/');
    }
}
