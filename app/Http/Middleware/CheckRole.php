<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // Cek apakah pengguna masuk
        if (Auth::check()) {
            // Cek apakah pengguna memiliki peran yang sesuai
            if (Auth::user()->role == $role) {
                return $next($request);
            }
        }

        // Redirect jika tidak memiliki hak akses
        // return redirect('')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        return abort(404);
    }
}
