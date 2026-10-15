<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle(Request $request, Closure $next)
    {
        // Assuming your users table has a 'usertype' field
        if (Auth::check() && Auth::user()->usertype === 'admin') {
            return $next($request);
        }

        // Redirect non-admin users
        return redirect('/home')->with('error', 'You do not have admin access.');
    }
}
