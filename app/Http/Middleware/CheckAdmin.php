<?php

namespace App\Http\Middleware;

use Brian2694\Toastr\Facades\Toastr;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()) {
            if (auth()->user()->role_id == 1) {
                return $next($request);
            } else {
                Toastr::warning("Only admin has the permission");
                return redirect()->route('user.login');
            }
        } else {
            Toastr::warning("Only admin has the permission");
            return redirect()->route('user.login');
        }
    }
}
