<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminStaffUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::guard('admin_staff_user')->check()) {
            return redirect()->route('show.login.page')->with([
                'error' => 'You are not allowed with this action.'
            ]);
        }

        return $next($request);
    }
}
