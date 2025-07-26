@extends('layouts.app')
@section('title', 'Kelola Antrian')

@section('content')
<div class="relative z-10 flex min-h-screen">
    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900">
        <header class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg border-b border-gray-200 dark:border-gray-700/50 p-6 sticky top-0 z-20">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Kelola Antrian</h1>
                    <p class="text-gray-600 dark:text-gray-400">Manajemen antrian pasien</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Cari antrian..." class="bg-gray-100 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg px-4 py-2 text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                    </div>
                    <button onclick="toggleTheme()" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors duration-300">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:inline"></i>
                    </button>
                </div>
            </div>
        </header>

        <!-- Title  -->
        <h2 class="mt-6 ml-8 text-[28px] font-bold text-gray-800 dark:text-white">Informasi Admin</h2>
        <!-- Stats Cards -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
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
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Antrian Selesai Hari Ini</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">{{ $selesaiCount }}</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-check-circle text-green-500 dark:text-green-400 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Title  -->
        <h2 class="mt-6 ml-8 text-[28px] font-bold text-gray-800 dark:text-white">Data Antrian</h2>
        <!-- Table Antrian  -->
        <div class="p-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-200 dark:border-gray-700/50 overflow-hidden">
                <div class="p-4 border-b border-gray-200 dark:border-gray-700/50 flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Daftar Antrian Hari Ini</h2>
                    <div class="flex space-x-2">
                        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-lg transition-all duration-300 flex items-center space-x-2">
                            <i class="fas fa-sync-alt"></i>
                            <span>Refresh</span>
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100 dark:bg-gray-700/50">
                            <tr>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">No. Antrian</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Pasien</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Poli</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Dokter</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Keluhan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700/50">
                            @foreach($antrians as $index => $antrian)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30">
                                <td class="px-6 py-4 text-center text-sm font-medium text-gray-800 dark:text-white">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-white">{{ $antrian->nomor_antrian }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $antrian->pasien->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $antrian->poli->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $antrian->dokter->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ Str::limit($antrian->keluhan, 20) }}</td>
                                <td class="px-6 py-4">
                                    @if($antrian->status == 'menunggu')
                                        <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 dark:bg-yellow-500/20 text-yellow-600 dark:text-yellow-400">Menunggu</span>
                                    @elseif($antrian->status == 'diproses')
                                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 dark:bg-blue-500/20 text-blue-600 dark:text-blue-400">Diproses</span>
                                    @else
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 dark:bg-green-500/20 text-green-600 dark:text-green-400">Selesai</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300 flex space-x-2">
                                    @if($antrian->status == 'menunggu')
                                    <form action="{{ route('antrian.panggil', $antrian->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="px-3 py-1 bg-blue-600 hover:bg-blue-500 text-white rounded text-xs">
                                            Panggil
                                        </button>
                                    </form>
                                    @endif

                                    @if($antrian->status != 'selesai')
                                    <form action="{{ route('antrian.selesai', $antrian->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="px-3 py-1 bg-green-600 hover:bg-green-500 text-white rounded text-xs">
                                            Selesai
                                        </button>
                                    </form>
                                    @endif
                                </td>
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
