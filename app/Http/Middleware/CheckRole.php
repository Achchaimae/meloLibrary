<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        if (!$request->user() || $request->user()->role != $role) {
            // If the user is not logged in or doesn't have the required role, redirect them to the login page
            return redirect('/login');
        }
    
        if ($request->user()->role == 'admin') {
            // If the user is an admin, redirect them to the admin page
            return redirect('/admin');
        }
    
        // If the user is a regular user, redirect them to the user page
        return redirect('/user');
    }
}    
