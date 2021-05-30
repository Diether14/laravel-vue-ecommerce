<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if(Auth::guard($guard)->check() && ($request->route()->named('login') || $request->route()->named('signup')) ) {
                $user = Auth::user();

                if($user->hasRole(['admin'])){
                    return redirect('/admin');
                } elseif($user->hasRole(['owner'])){
                    return redirect('/owner');
                } elseif($user->hasRole(['customer'])){
                    return redirect('/');
                }
            }
        }

        return $next($request);
    }
}
