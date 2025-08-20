<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm() {
        $title = 'Login';
        return view('auth.login', compact('title'));
    }
    public function login(Request $request) {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.index')->with('success','Login Berhasil!');
        }
        return back()->withErrors(['username' => 'Username atau Password']);
    }
}
