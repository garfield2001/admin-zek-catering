<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        if (Auth::guard('admin_staff_user')->check()) {
            return to_route('show.dashboard.page');
        }


        return Inertia::render('Login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin_staff_user')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            return to_route('show.dashboard.page');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }


    public function logout(Request $request)
    {
        Auth::guard('admin_staff_user')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('show.login.page');
    }
}
