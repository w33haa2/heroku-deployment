<?php

namespace App\Http\Middleware;
use Closure;
//use Illuminate\Auth\Middleware\Role as Middleware;
use Illuminate\Support\Facades\Auth;

class Role {

    public function handle($request, Closure $next, String $role) {
        $user = Auth::user();
        if($user->user_type == $role) {
            return $next($request);
        }

        return redirect('/chats');
    }
}
