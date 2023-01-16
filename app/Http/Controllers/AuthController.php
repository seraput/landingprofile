<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.auth.login.index');
    }

    public function authenticated(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard')->with('success', 'Success sign in .');
        }

        return back()->withErrors([
            'loginError' => 'Periksa kembali email dan password anda !'
        ]);
    }

    public function register()
    {
        return view('auth.register.index');
    }

    public function forgot()
    {
        return view('auth.forgot.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
