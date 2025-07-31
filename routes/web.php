<?php

use App\Http\Controllers\PartController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
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

Route::get('/forum', [PostsController::class , 'index'])->middleware('auth');
Route::get('/forum/create', [PostsController::class , 'create'])->middleware('auth');
Route::post('/forum/create', [PostsController::class , 'store'])->middleware('auth');
Route::get('/forum/{post}', [PostsController::class , 'show'])->middleware('auth');
Route::get('/forum/{post}/edit', [PostsController::class , 'edit'])->middleware('auth');
Route::patch('/forum/{post}/edit', [PostsController::class , 'update'])->middleware('auth');
Route::delete('/forum/{post}', [PostsController::class , 'destroy'])->middleware('auth');

Route::controller(PartController::class)->group(function () {
    Route::get('/parts', 'index')->middleware('auth')->name('parts.index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});
