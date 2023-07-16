<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Use a ternary operator to check if the user is logged in and is an admin
        return Auth::check() && Auth::user()->isAdmin()
            // If yes, proceed with the request
            ? $next($request)
            // If no, redirect to the appropriate route with a message
            : redirect(route(Auth::guest() 
            
            ? 'login':'home'))->with('msg', "You don't have the permission!");

    }
}