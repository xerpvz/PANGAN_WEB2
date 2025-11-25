<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show Register Page
    public function showRegister() {
        return view('auth.register');
    }

    // Handle Register
    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Account created! Please login.');
    }

    // Show Login Page
    public function showLogin() {
        return view('auth.login');
    }

    // Handle Login
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // IMPORTANT: this line saves the login session
        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }

    return redirect()->back()->with('error', 'Invalid login credentials.');
}

    // Logout
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}

