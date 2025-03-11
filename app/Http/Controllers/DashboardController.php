<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard');
    }

    //For Testing Purposes
    public function test()
    {
        return Inertia::render('Test');
    }
}
