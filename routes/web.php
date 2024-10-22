<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Redirect root to login page
Route::get('/', function () {
    return redirect()->route('login');
});

// Display login form
Route::get('/login', function () {
    return view('utility-pages.log-in');
})->name('login');

// Display sign-up (registration) form
Route::get('/sign-up', function () {
    return view('utility-pages.sign-up');
})->name('sign-up');

// Display reset password request form
Route::get('/reset-password', function () {
    return view('utility-pages.reset-password');
})->name('reset-password');

// Process resetting password (with token from email)
Route::get('password/reset/{token}', function ($token) {
    return view('utility-pages.reset-password', ['token' => $token]);
})->name('password.reset');

// Other routes
Route::get('/index', function () {
    return view('index');
})->name('index');

// Authenticated (protected) routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/tasks', function () {
            return view('dashboards.tasks');
        })->name('tasks');
    });

