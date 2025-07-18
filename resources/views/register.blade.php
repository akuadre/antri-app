@extends('layouts.app')

@section('title', 'Buat Akun')

@section('content')
<div class="min-h-screen flex items-center justify-center p-4 text-white">
    <div class="bg-gray-900 rounded-2xl border-4 border-slate-600 shadow-lg shadow-slate-600 w-full max-w-2xl p-8 space-y-6">
        <!-- Header -->
        <div class="text-center">
            <h1 class="text-3xl font-bold text-white mb-2">Buat Akun</h1>
            <p class="text-gray-400">Silakan buat akun baru Anda</p>
        </div>

        <!-- Error Box -->
        @if ($errors->any())
        <div id="errorBox" class="bg-red-900 border border-red-700 rounded-lg p-4 text-red-200">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium">Gagal Mendaftar</h3>
                    <div class="mt-1 text-sm">
                        <p>{{ $errors->first() }}</p>
                    </div>
                </div>
                <div class="ml-auto pl-3">
                    <button onclick="hideError()" class="text-red-300 hover:text-white">
                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @endif

        <!-- Form -->
        <form class="space-y-5" action="{{ route('authenticating') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Nama Pemilik</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition"
                        placeholder="Nama lengkap pemilik">
                </div>

                <div>
                    <label for="company_name" class="block text-sm font-medium text-gray-300 mb-1">Nama Perusahaan</label>
                    <input type="text" name="company_name" id="company_name" value="{{ old('company_name') }}" required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition"
                        placeholder="Nama perusahaan/instansi">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition"
                        placeholder="Email perusahaan">
                </div>

                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-300 mb-1">Kategori Perusahaan</label>
                    <select name="category_id" id="category_id" required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition">
                        <option value="" disabled selected>Pilih kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="telepon" class="block text-sm font-medium text-gray-300 mb-1">No. Telepon</label>
                    <input type="text" name="telepon" id="telepon" value="{{ old('telepon') }}" required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition"
                        placeholder="081234567890">
                </div>

                <div>
                    <label for="photo" class="block text-sm font-medium text-gray-300 mb-1">Foto Profil (Opsional)</label>
                    <input type="file" name="photo" id="photo"
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition text-sm">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition"
                        placeholder="Password akun">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-1">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition"
                        placeholder="Ulangi password">
                </div>
            </div>

            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-300 mb-1">Alamat Perusahaan</label>
                <textarea name="alamat" id="alamat" rows="2"
                    class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:scale-[1.01] focus:translate-y-1 transition"
                    placeholder="Alamat lengkap perusahaan">{{ old('alamat') }}</textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-700 hover:bg-blue-800 text-white py-3 px-4 rounded-lg font-medium transition">
                Buat Akun
            </button>
        </form>



        <!-- Divider -->
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-600"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-gray-900 text-gray-400">Atau lanjutkan dengan</span>
            </div>
        </div>

        <!-- Social Login -->
        <div class="grid grid-cols-2 gap-3">
            <button
                class="flex items-center justify-center px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg hover:bg-gray-700 transition">
                <svg class="w-5 h-5 text-red-500" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                    <path fill="currentColor"
                        d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                    <path fill="currentColor"
                        d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                    <path fill="currentColor"
                        d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                </svg>
                <span class="ml-2 text-sm font-medium text-gray-300">Google</span>
            </button>
            <button
                class="flex items-center justify-center px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg hover:bg-gray-700 transition">
                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 12.073c0-6.627-5.373-12-12-12S0 5.446 0 12.073c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953h-1.538c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>
                <span class="ml-2 text-sm font-medium text-gray-300">Facebook</span>
            </button>
        </div>

        <!-- Login Link -->
        <div class="text-center">
            <p class="text-sm text-gray-400">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-blue-400 hover:text-blue-600 font-medium transition">Masuk di sini</a>
            </p>
        </div>
    </div>
</div>
@endsection
