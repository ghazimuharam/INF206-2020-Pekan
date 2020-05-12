<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
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
        if (Auth::guard('admin')->check()) {
            return redirect(route('mitraprofile'));
        }else if (Auth::guard('mitra')->check()) {
            return redirect(route('mitraprofile'));
        }else if (Auth::check()) {
            return redirect(route('mitraprofile'));
        }

        return $next($request);
    }
}
