<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Nampilin halaman Register
    public function showRegister() {
        return view('register');
    }

    // Proses nyimpen data Register ke database
    public function prosesRegister(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('sukses', 'Daftar berhasil, silakan login!');
    }

    // Nampilin halaman Login
    public function showLogin() {
        return view('login');
    }

    // Proses ngecek kecocokan email & password
    public function prosesLogin(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // INI BAGIAN PENTING:
        // Pastikan mengarah ke '/dashboard'
        return redirect()->intended('/dashboard'); 
    }

    return back()->with('error', 'Email atau password salah.');
}

    // Proses Keluar (Logout)
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}