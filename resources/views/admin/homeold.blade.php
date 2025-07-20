@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="min-h-screen bg-gray-900 text-white">
    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 flex justify-between items-center shadow-md">
        <h1 class="text-2xl font-bold">Dashboard Admin</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded transition">
                Keluar
            </button>
        </form>
    </nav>

    <!-- Main Content -->
    <div class="p-6">
        <!-- Welcome Section -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold">Selamat datang, Admin!</h2>
            <p class="text-gray-400 mt-2">Anda berhasil masuk ke panel administrator. Gunakan menu di bawah untuk mengelola sistem.</p>
        </div>

        <!-- Grid Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-gray-800 p-5 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-2">Pengguna Terdaftar</h3>
                <p class="text-3xl font-bold">1,245</p>
                <p class="text-sm text-gray-400 mt-2">Jumlah total pengguna aktif</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-gray-800 p-5 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-2">Transaksi Hari Ini</h3>
                <p class="text-3xl font-bold">Rp 4.520.000</p>
                <p class="text-sm text-gray-400 mt-2">Data per tanggal {{ now()->format('d M Y') }}</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-gray-800 p-5 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold mb-2">Laporan Belum Dibaca</h3>
                <p class="text-3xl font-bold">7</p>
                <p class="text-sm text-gray-400 mt-2">Periksa laporan terbaru yang masuk</p>
            </div>
        </div>

        <!-- Table Preview (Optional) -->
        <div class="mt-10">
            <h3 class="text-lg font-semibold mb-4">Aktivitas Terbaru</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left table-auto bg-gray-800 rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-gray-700 text-gray-300 text-sm uppercase">
                            <th class="px-4 py-3">Tanggal</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">Aktivitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-gray-700 hover:bg-gray-700">
                            <td class="px-4 py-3">18 Jul 2025</td>
                            <td class="px-4 py-3">Andi Pratama</td>
                            <td class="px-4 py-3">Login ke sistem</td>
                        </tr>
                        <tr class="border-t border-gray-700 hover:bg-gray-700">
                            <td class="px-4 py-3">18 Jul 2025</td>
                            <td class="px-4 py-3">Rina Marlina</td>
                            <td class="px-4 py-3">Upload laporan baru</td>
                        </tr>
                        <tr class="border-t border-gray-700 hover:bg-gray-700">
                            <td class="px-4 py-3">17 Jul 2025</td>
                            <td class="px-4 py-3">Budi Santoso</td>
                            <td class="px-4 py-3">Mengedit profil</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
