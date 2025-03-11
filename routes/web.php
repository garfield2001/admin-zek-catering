<?php

use App\Http\Controllers\CateringPackagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AdminStaffUser;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('app');
}); */

Route::redirect('/', 'login');


Route::get('/login', [LoginController::class, 'showLogin'])->name('show.login.page');
Route::post('/login', [LoginController::class, 'login'])->name('login.user');

Route::get('/test', [DashboardController::class, 'test']);

Route::middleware([AdminStaffUser::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('show.dashboard.page');

    Route::get('/catering_packages', [CateringPackagesController::class, 'index'])->name('show.catering-packages.page');



    Route::post('/logout', [LoginController::class, 'logout'])->name('logout.user');
});
