<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle($request, Closure $next)
    {
        //dd('Middleware is running');
        if (Auth::check()) {
            $userRole = Auth::user()->role;
            if ($userRole == 'admin') {
                return redirect('/admin/input');
            } 
            elseif ($userRole != 'admin') {
                return redirect('/dashboard');
            }
            else {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
