<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
Route::get('/', [DashboardController::class, 'index']);

Route::get('/layout-static', function () {
    return view('layout-static');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/ordermenu', function () {
    return view('ordermenu');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/questions', function () {
    return view('questions');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/register', function () {
    return view('register');
});