<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\User;
use App\Role;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request); // TODO: !
        $currentRoute = $request->route()->getName();
        $user = User::current();
        if (!$user) {
            $guest = Role::guest();
            if (!$guest) {
                abort(403);
                return;
            }
            if ($guest->hasAccessToRoute($currentRoute)) {
                return $next($request);
            }
            abort(403);
            return;
        }

        // Always allow user with id 1.
        if ($user->id == 1) {
            return $next($request);
        }

        foreach ($user->roles as $role) {
            if ($role->hasAccessToRoute($currentRoute)) {
                return $next($request);
            }
        }

        abort(403);
    }
}
