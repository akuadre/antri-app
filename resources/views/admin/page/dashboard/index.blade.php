@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="relative z-10 flex min-h-screen">
    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <!-- Top Header -->
        <header class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg border-b border-gray-200 dark:border-gray-700/50 p-6 sticky top-0 z-20 transition-colors duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Dashboard Admin</h1>
                    <p class="text-gray-600 dark:text-gray-400">Manajemen antrian puskesmas</p>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-500 dark:text-gray-300">{{ now()->format('l, d F Y') }}</span>
                    <!-- Toggle Theme Switch -->
                    <button onclick="toggleTheme()" class="group relative w-16 h-9 flex items-center bg-gray-300 dark:bg-gray-700 rounded-full p-1 transition-all duration-500 focus:outline-none">
                        <!-- Toggle Circle -->
                        <div id="toggle-circle" class="absolute top-1 left-1 w-7 h-7 rounded-full shadow-md transform transition-all duration-200 bg-white dark:bg-gray-300 translate-x-0 dark:translate-x-7 group-hover:translate-x-[3px] dark:group-hover:translate-x-[25px]">
                        </div>

                        <!-- Icon Light -->
                        <span class="absolute left-1 text-yellow-500 hidden dark:inline text-md z-10 [text-shadow:0_0_8px_rgba(255,255,255,0.4)]">☀️</span>

                        <!-- Icon Dark -->
                        <span class="absolute right-1 text-gray-200 dark:hidden text-md z-10 [text-shadow:0_0_8px_rgba(0,0,0,0.7)]">🌙</span>
                    </button>
                </div>
            </div>
        </header>

        <!-- Title  -->
        <h2 class="mt-6 px-6 text-[28px] font-bold text-gray-800 dark:text-white">Informasi Admin</h2>
        <!-- Stats Cards -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-blue-300 dark:hover:border-blue-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Total Antrian Hari Ini</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">{{ $totalAntrian }}</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-list-ol text-blue-500 dark:text-blue-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-green-300 dark:hover:border-green-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Antrian Selesai</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">{{ $selesaiCount }}</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-check-circle text-green-500 dark:text-green-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-purple-300 dark:hover:border-purple-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Total Poli</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">{{ $poliCount }}</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-procedures text-purple-500 dark:text-purple-400 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Title  -->
        <h2 class="px-6 text-[28px] font-bold text-gray-800 dark:text-white">Antrian Tiket</h2>
        <!-- Recent Activity -->
        <div class="p-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-200 dark:border-gray-700/50 overflow-hidden">
                <div class="p-4 border-b border-gray-200 dark:border-gray-700/50">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Antrian Terakhir</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100 dark:bg-gray-700/50">
                            <tr>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">No. Antrian</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Poli</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Dokter</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Waktu</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700/50">
                            @foreach($recentAntrian as $index => $antrian)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30">
                                <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-white text-center">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-white">{{ $antrian->nomor_antrian }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $antrian->poli->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $antrian->dokter->name }}</td>
                                <td class="px-6 py-4">
                                    @if($antrian->status == 'menunggu')
                                        <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 dark:bg-yellow-500/20 text-yellow-600 dark:text-yellow-400">Menunggu</span>
                                    @elseif($antrian->status == 'diproses')
                                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 dark:bg-blue-500/20 text-blue-600 dark:text-blue-400">Diproses</span>
                                    @else
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 dark:bg-green-500/20 text-green-600 dark:text-green-400">Selesai</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $antrian->created_at->format('H:i') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
