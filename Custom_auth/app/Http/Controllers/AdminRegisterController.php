<?php

namespace App\Http\Controllers;

use App\Events\AdminRegisterEvent;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminRegisterController extends Controller
{
    public function create()
    {
        return view('Admin.Auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);

        $admin = Admin::create($request->only(['name', 'email', 'password']));

        Auth::guard('admin')->login($admin);

        event(new AdminRegisterEvent($admin));

        $request->session()->regenerate();

        return redirect()->intended('admin/dashboard');
    }
}
