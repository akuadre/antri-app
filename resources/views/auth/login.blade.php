@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen relative flex items-center justify-center p-4">
    <div class="bg-gray-900 text-white rounded-2xl border-4 border-slate-600 shadow-lg shadow-slate-600 w-full max-w-md p-7 space-y-6">
        <!-- Header -->
        <div class="text-center">
            <h1 class="text-3xl font-bold mb-2">Masuk</h1>
            <p class="text-gray-400">Silakan masuk ke akun Anda</p>
        </div>

        <!-- Error Box -->
        @if ($errors->any())
        <div id="errorBox" class="bg-red-500/10 border border-red-400 text-red-300 rounded-lg p-4">
            <div class="flex items-start">
                <svg class="h-5 w-5 text-red-400 mt-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
                </svg>
                <div class="ml-3">
                    <h3 class="text-sm font-medium">Login Gagal</h3>
                    <p class="mt-1 text-sm">
                        {{ $errors->first() }}
                    </p>
                </div>
                <button onclick="hideError()" class="ml-auto text-red-300 hover:text-red-100 transition">
                    ✕
                </button>
            </div>
        </div>
        @endif

        <!-- Form -->
        <form class="space-y-5" action="{{ route('authenticating') }}" method="POST">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full px-4 py-3 bg-gray-800 border border-gray-700 text-white rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition"
                    placeholder="Masukkan email Anda"
                >
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium mb-2">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    class="w-full px-4 py-3 bg-gray-800 border border-gray-700 text-white rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition"
                    placeholder="Masukkan password Anda"
                >
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between text-sm">
                {{-- <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="form-checkbox text-blue-500 bg-gray-700 border-gray-600 rounded">
                    <span class="ml-2">Ingat saya</span>
                </label> --}}
                <a href="#" class="text-blue-400 hover:underline">Lupa password?</a>
            </div>

            <!-- Login Button -->
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-lg font-semibold transition duration-200">
                Masuk
            </button>
        </form>

        <!-- Divider -->
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-700"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="bg-gray-900 px-2 text-gray-400">Atau lanjutkan dengan</span>
            </div>
        </div>

        <!-- Social Login -->
        <div class="grid grid-cols-2 gap-3">
            <button class="flex items-center justify-center px-4 py-3 border border-gray-600 rounded-lg hover:bg-gray-700 transition">
                <svg class="w-5 h-5 text-red-400" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                    <path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                <span class="ml-2 text-sm text-white">Google</span>
            </button>
            <button class="flex items-center justify-center px-4 py-3 border border-gray-600 rounded-lg hover:bg-gray-700 transition">
                <svg class="w-5 h-5 text-blue-400" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
                <span class="ml-2 text-sm text-white">Facebook</span>
            </button>
        </div>

        <!-- Sign Up Link -->
        <div class="text-center">
            <p class="text-sm text-gray-400">
                Belum punya akun?
                {{-- <a href="{{ route('register') }}" class="text-blue-400 hover:underline"> --}}
                <a href="#" class="text-blue-400 hover:underline">
                    Daftar di sini
                </a>
            </p>
        </div>
    </div>
</div>
@endsection
