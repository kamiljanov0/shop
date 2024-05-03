<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use function Laravel\Prompts\error;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (auth()->check()) {
            if (auth()->user()->isAdmin === 1) {
                return $next($request);
            } else {
                 abort(403, 'You are not authorized to access this resource.');
            }
        }

         Abort(403, 'You are not authorized to access this resource.');
    }
}

