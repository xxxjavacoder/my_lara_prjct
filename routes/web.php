<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisteredUserController::class , 'show']);
Route::post('/register', [RegisteredUserController::class , 'store']);

Route::get('/login', [SessionController::class , 'show']);
Route::post('/login', [SessionController::class , 'login']);
Route::get('/logout', [SessionController::class , 'logout']);

Route::get('/prices', function () {
    return view('prices');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});
