<?php

namespace App\Http\Middleware;

use Closure;

class UserIsAdministrator
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
        abort_unless(auth()->user()->is_admin, 403);

        return $next($request);
    }
}
