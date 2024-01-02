<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Symfony\Component\HttpFoundation\Response;

class ExceptionHandler
{
    public function handle(Request $request, Closure $next): Response{
        try {
            return $next($request);
        } catch (\Throwable $th) {
            Toastr::error($th->getMessage());
            return redirect()->back();
        }
    }
}
