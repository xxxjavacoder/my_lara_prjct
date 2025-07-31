<?php

use App\Http\Controllers\PartController;
use App\Http\Controllers\PostController;
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

Route::get('/posts', [PostController::class , 'index'])->middleware('auth');
Route::get('/posts/create', [PostController::class , 'create'])->middleware('auth');
Route::post('/posts/create', [PostController::class , 'store'])->middleware('auth');
Route::get('/posts/{post}', [PostController::class , 'show'])->middleware('auth');
Route::get('/posts/{post}/edit', [PostController::class , 'edit'])->middleware('auth')->can('edit', 'post');
Route::patch('/posts/{post}/edit', [PostController::class , 'update'])->middleware('auth')->can('edit', 'post');;
Route::delete('/posts/{post}', [PostController::class , 'destroy'])->middleware('auth')->can('edit', 'post');;

Route::controller(PartController::class)->group(function () {
    Route::get('/parts', 'index')->middleware('auth')->name('parts.index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});
