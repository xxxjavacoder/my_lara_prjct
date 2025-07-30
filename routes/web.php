<?php

use App\Http\Controllers\PartController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisteredUserController::class , 'show']);
Route::post('/register', [RegisteredUserController::class , 'store']);

Route::get('/login', [SessionController::class , 'show'])->name('login');
Route::post('/login', [SessionController::class , 'login']);
Route::get('/logout', [SessionController::class , 'logout']);

Route::get('/news', [Posts::class , 'index']);
Route::get('/news/{id}', [Posts::class , 'show']);

Route::controller(PartController::class)->group(function () {
    Route::get('/parts', 'index')->middleware(['auth'])->name('parts.index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});
