<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => ['required', 'confirmed', 'min:8']
        ]);

        $user = User::create($attributes);

        //login
        Auth::login($user);

        //redirect
        return redirect('/');
    }
}
