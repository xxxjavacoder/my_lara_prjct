<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function show() {
        return view('auth.login');
    }

    public function login() {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        Auth::attempt($attributes);


        return redirect('/');
    }

    public function logout() {
        Auth::logout();

        return redirect('/');
    }
}
