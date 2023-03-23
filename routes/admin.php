<?php

use App\Http\Controllers\Admin\LoginController;


use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', LoginController::class)->name('admin.login.submit');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
});


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');
});

 
