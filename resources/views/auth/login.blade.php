@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen relative overflow-hidden bg-gradient-to-br from-blue-50 via-white to-indigo-50 dark:from-gray-950 dark:via-gray-900 dark:to-gray-950 transition-colors duration-300 flex items-center justify-center px-4 py-10">

    {{-- Background Glow --}}
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-400/20 rounded-full blur-3xl pointer-events-none"></div>

    {{-- Toggle Theme --}}
    <button id="theme-toggle"
        class="absolute top-6 right-6 p-3 rounded-xl bg-white/80 dark:bg-gray-800/80 backdrop-blur border border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 hover:scale-105 transition-all shadow-lg focus:outline-none">
        
        <!-- Tambahkan ID agar gampang di-toggle via JS -->
        <i id="icon-sun" data-lucide="sun" class="h-5 w-5 hidden dark:block"></i>
        <i id="icon-moon" data-lucide="moon" class="h-5 w-5 block dark:hidden"></i>
    </button>

    {{-- Login Card --}}
    <div class="relative w-full max-w-md">

        {{-- Glow Card --}}
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-3xl blur-2xl opacity-20 pointer-events-none"></div>

        <div class="relative bg-white/90 dark:bg-gray-900/90 backdrop-blur-xl border border-white/20 dark:border-gray-800 rounded-3xl shadow-2xl overflow-hidden">

            {{-- Top Gradient --}}
            <div class="h-1.5 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>

            <div class="p-8 md:p-10">

                {{-- Header --}}
                <div class="text-center mb-8">
                    <div class="flex justify-center mb-5">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-500 shadow-lg">
                            <i data-lucide="heart-pulse" class="h-8 w-8 text-white"></i>
                        </div>
                    </div>

                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                        Selamat Datang
                    </h1>

                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Login untuk melanjutkan ke dashboard
                    </p>
                </div>

                {{-- Error --}}
                @if ($errors->any())
                <div id="errorBox"
                    class="mb-6 flex items-start gap-3 rounded-2xl border border-red-200 dark:border-red-500/20 bg-red-50 dark:bg-red-500/10 p-4">

                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-red-100 dark:bg-red-500/20 shrink-0">
                        <i data-lucide="circle-x" class="h-5 w-5 text-red-500"></i>
                    </div>

                    <div class="flex-1">
                        <h3 class="font-semibold text-red-600 dark:text-red-300">
                            Login gagal
                        </h3>
                        <p class="text-sm text-red-500 dark:text-red-200/80 mt-1">
                            {{ $errors->first() }}
                        </p>
                    </div>

                    <button onclick="document.getElementById('errorBox').remove()"
                        class="text-red-400 hover:text-red-600 dark:hover:text-red-300 transition shrink-0">
                        ✕
                    </button>
                </div>
                @endif

                {{-- Form --}}
                <form action="{{ route('authenticating') }}" method="POST" class="space-y-5">
                    @csrf

                    {{-- Email --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Email
                        </label>
                        <div class="relative">
                            <i data-lucide="mail"
                                class="absolute left-4 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400"></i>
                            <input type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                placeholder="Masukkan email Anda"
                                class="w-full rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 pl-12 pr-4 py-3.5 text-gray-900 dark:text-white placeholder:text-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/20 outline-none transition-all">
                        </div>
                    </div>

                    {{-- Password --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <i data-lucide="lock"
                                class="absolute left-4 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400"></i>
                            <input type="password"
                                name="password"
                                required
                                placeholder="Masukkan password Anda"
                                class="w-full rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 pl-12 pr-4 py-3.5 text-gray-900 dark:text-white placeholder:text-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/20 outline-none transition-all">
                        </div>
                    </div>

                    {{-- Forgot --}}
                    <div class="flex justify-end">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:underline">
                            Lupa password?
                        </a>
                    </div>

                    {{-- Button --}}
                    <button type="submit"
                        class="group w-full rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 py-3.5 font-semibold text-white shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-0.5">
                        <span class="flex items-center justify-center">
                            Masuk
                            <i data-lucide="arrow-right"
                                class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1"></i>
                        </span>
                    </button>
                </form>

                {{-- Footer --}}
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Belum punya akun?
                        <a href="#"
                            class="font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                            Daftar sekarang
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- SCRIPT --}}
<script>
    // Pastikan DOM sudah diload sebelum icon dan tema dirender
    document.addEventListener('DOMContentLoaded', () => {
        // Render Icons
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;

        // Cek LocalStorage
        const savedTheme = localStorage.getItem('theme') || 'light';
        html.classList.toggle('dark', savedTheme === 'dark');

        // Toggle Event
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            const currentTheme = html.classList.contains('dark') ? 'dark' : 'light';
            localStorage.setItem('theme', currentTheme);
        });
    });
</script>
@endsection