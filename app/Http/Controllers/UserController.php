<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function ProfileView()
    {
        $profile = User::where('id', Auth::id())->first();
        dd($profile->toArray());

        return view('profile', [
            'profile' => $profile
        ]);
    }
}
