<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class UserRegisterController extends Controller
{
    public function create()
    {
        return view('User.Auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);

        $user = User::create($request->only(['name', 'email', 'password']));

        Auth::guard('web')->login($user);

        event(new Registered($user));

        $request->session()->regenerate();

        return redirect()->intended('dashboard');
    }
}
