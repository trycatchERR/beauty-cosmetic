<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return redirect('/');
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
        $request->validate([
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        $user = new User();
        $user->name = 'user' . rand(100000, 999999);
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        auth()->login($user);

        return redirect()->route('home');
    }
}
