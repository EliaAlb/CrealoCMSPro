<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('utility-pages.log-in');
})->name('login');

Route::get('/sign-up', function () {
    return view('utility-pages.sign-up');
})->name('sign-up');

Route::get('/reset-password', function () {
    return view('utility-pages.reset-password');
})->name('reset-password');


Route::get('/index', function () {
    return view('index');
})->name('index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/task', function () {
            return view('dashboards.task');
        })->name('taks');
    });