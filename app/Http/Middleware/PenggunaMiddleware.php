<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PenggunaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('pengguna')->user() != null and Auth::guard('pengguna')->user()->role == 'pengguna') {
            return $next($request);
        } else {
            return redirect()->to('/login')->with('error', 'Silahkan login untuk melanjutkan !');
        }
    }
}
