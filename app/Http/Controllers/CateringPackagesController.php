<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CateringPackagesController extends Controller
{
    public function index()
    {
        return Inertia::render('CateringPackages');
    }
}
