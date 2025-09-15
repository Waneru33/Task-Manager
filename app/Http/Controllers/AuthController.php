<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('Auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // 🔹 Redirect sesuai role
            if (Auth::user()->role === 'admin') {
                return redirect()->route('projects.index'); // ke /projects
            }

            return redirect()->route('tasks.my'); // ke /my-tasks
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('landing');
    }

    // 🔹 REGISTER
    public function showRegister()
    {
        return view('Auth.register');
    }

    public function register(Request $request)
    {
        // ✅ Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // ✅ Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // default role user
        ]);

        // ✅ Login otomatis setelah register
        Auth::login($user);

        return redirect()->route('tasks.my');
    }
}
