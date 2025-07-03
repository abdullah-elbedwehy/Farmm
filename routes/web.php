<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post(
    '/login',
    [UserController::class, 'login']
);
Route::post(
    '/register',
    [UserController::class, 'register']
);
Route::get(
    '/home',
    function () {
        return view('main');
    }
);
Route::get('/react', function () {
    return view('react');
});
Route::post('/logout', [UserController::class, 'logout']);