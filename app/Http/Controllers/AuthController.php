<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
}

public function store(Request $request)
{
    if (Auth::attempt($request->only('email', 'password'))) {
        return redirect('/dashboard');
    }
    return back()->withErrors(['email' => 'Invalid credentials']);
}

public function logout()
{
    Auth::logout();
    return redirect('/login');
}
