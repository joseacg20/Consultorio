<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleSecretary
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
        $user = Auth :: user();
        $user->id;
        $user->roles;

        foreach($user->roles as $role){
            if($role->pivot->role_id == 1 || $role->pivot->role_id == 3){
                return $next($request);
            }
        }

        return redirect(route('home'));
    }
}
