<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login() {
        if (Auth::check())
        {
            return redirect()->route('home');
        }
        else
        {
            return view('auth.login');
        }
    }

    public function register() {
        if (Auth::check())
        {
            return redirect()->route('home');
        }
        else
        {
            return view('auth.register');
        }
    }

    public function regist(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:owners,email',
            'password' => 'required|string|min:6',
            'company_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:20',
        ]);

        // Simpan user baru
        $owner = Owner::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'company_name' => $request->company_name,
            'category_id' => $request->category_id,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        Auth::login($owner);

        return redirect()->intended(route('home'))->with('success', 'Registrasi berhasil!');
    }

    public function authenticating(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        // return back()->withErrors('Email atau password salah.')->onlyInput('email');
        return back()->with('error', 'Email atau password salah.')->onlyInput('email');
    }

    function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
