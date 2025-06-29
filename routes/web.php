<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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