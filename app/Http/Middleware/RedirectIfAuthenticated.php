<?php

namespace App\Http\Middleware;

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
        if (Auth::guard($guard)->check()) {
//            return redirect('/dashboard');
            $role = Auth::user()->user_type;
            switch ($role) {
                case 'admin':
                    return redirect('/home');
                    break;
                case 'prospect':
                    return redirect('/chats');
                    break;
                default:
                    return redirect('/chats');
                    break;
            }
        }

        return $next($request);
    }
}
