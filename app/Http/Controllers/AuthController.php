<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function registerView()
    {
        return view('signup');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }
        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials'
        ]);
    }

    public function register(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        $credentials['password'] = bcrypt($credentials['password']);
        auth()->attempt($credentials);
        return redirect()->route('home');
    }
}
