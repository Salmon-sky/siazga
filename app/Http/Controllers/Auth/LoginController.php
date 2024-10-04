<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Mengarah ke view login
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Mencoba autentikasi pengguna
        if (Auth::attempt($request->only('email', 'password'))) {
            // Jika berhasil login, arahkan ke dashboard
            return redirect()->intended('dashboard');
        }

        // Jika gagal login, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
