<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Tambahan untuk mencegah bukan admin mengakses
 */
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * Untuk mencegah bukan admin mengakses
         */
        if(Auth::user()->usertype != 'admin')
        {
            return redirect('/');
        }

        return $next($request);
    }
}
