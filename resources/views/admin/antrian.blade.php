@extends('layouts.app')
@section('title', 'Kelola Antrian')

@section('content')
<div class="relative z-10 flex min-h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800/80 backdrop-blur-lg border-r border-gray-700/50 p-6 flex flex-col sticky top-0 h-screen">
        <!-- Logo -->
        <div class="flex items-center space-x-3 mb-8">
            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center animate-glow">
                <i class="fas fa-hospital text-white text-xl"></i>
            </div>
            <div>
                <h1 class="text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Puskesmas</h1>
                <p class="text-xs text-gray-400">Admin Dashboard</p>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="space-y-2">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-blue-600/20 text-blue-400 border border-blue-500/30 transition-all duration-300">
                <i class="fas fa-home text-lg"></i>
                <span class="font-medium">Dashboard</span>
            </a>
            <a href="{{ route('antrian') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                <i class="fas fa-list-ol text-lg"></i>
                <span>Kelola Antrian</span>
                {{-- <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">{{ $antrianCount }}</span> --}}
                <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">10</span>
            </a>
            <a href="{{ route('dokter') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                <i class="fas fa-user-md text-lg"></i>
                <span>Kelola Dokter</span>
            </a>
            <a href="{{ route('poli') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                <i class="fas fa-procedures text-lg"></i>
                <span>Kelola Poli</span>
            </a>
        </nav>

        <!-- User Profile Section -->
        <div class="mt-auto pt-4 border-t border-gray-700">
            <div class="flex items-center space-x-3 px-4 py-3">
                <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-white"></i>
                </div>
                <div>
                    <p class="font-medium">Admin</p>
                    <p class="text-xs text-gray-400">Super Admin</p>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST" class="w-full mt-2">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center space-x-2 px-4 py-3 bg-red-600/20 hover:bg-red-600/30 text-red-400 rounded-lg transition-all duration-300 border border-red-500/30">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen bg-gray-900">
        <header class="bg-gray-800/60 backdrop-blur-lg border-b border-gray-700/50 p-6 sticky top-0 z-20">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-white">Kelola Antrian</h1>
                    <p class="text-gray-400">Manajemen antrian pasien</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Cari antrian..." class="bg-gray-700/50 border border-gray-600/50 rounded-lg px-4 py-2 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                    </div>
                </div>
            </div>
        </header>

        <div class="p-6">
            <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-700/50 overflow-hidden">
                <div class="p-4 border-b border-gray-700/50 flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-white">Daftar Antrian Hari Ini</h2>
                    <div class="flex space-x-2">
                        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-lg transition-all duration-300 flex items-center space-x-2">
                            <i class="fas fa-sync-alt"></i>
                            <span>Refresh</span>
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-700/50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">No. Antrian</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Pasien</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Poli</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Dokter</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Keluhan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700/50">
                            {{-- @foreach($antrians as $antrian) --}}
                            <tr class="hover:bg-gray-700/30">
                                {{-- <td class="px-6 py-4 text-sm font-medium text-white">{{ $antrian->nomor_antrian }}</td> --}}
                                <td class="px-6 py-4 text-sm font-medium text-white">PU-001</td>
                                {{-- <td class="px-6 py-4 text-sm text-gray-300">{{ $antrian->pasien->nama }}</td> --}}
                                <td class="px-6 py-4 text-sm font-medium text-white">Angga</td>
                                {{-- <td class="px-6 py-4 text-sm text-gray-300">{{ $antrian->poli->nama_poli }}</td> --}}
                                <td class="px-6 py-4 text-sm font-medium text-white">Poli Umum</td>
                                {{-- <td class="px-6 py-4 text-sm text-gray-300">{{ $antrian->dokter->nama }}</td> --}}
                                <td class="px-6 py-4 text-sm font-medium text-white">Dr. Tirta</td>
                                {{-- <td class="px-6 py-4 text-sm text-gray-300">{{ Str::limit($antrian->keluhan, 20) }}</td> --}}
                                <td class="px-6 py-4 text-sm font-medium text-white">Ga Enak Badan Ih</td>
                                <td class="px-6 py-4">
                                    {{-- @if($antrian->status == 'menunggu') --}}
                                        <span class="px-2 py-1 text-xs rounded-full bg-yellow-500/20 text-yellow-400">Menunggu</span>
                                    {{-- @elseif($antrian->status == 'diproses') --}}
                                        {{-- <span class="px-2 py-1 text-xs rounded-full bg-blue-500/20 text-blue-400">Diproses</span> --}}
                                    {{-- @else --}}
                                        {{-- <span class="px-2 py-1 text-xs rounded-full bg-green-500/20 text-green-400">Selesai</span> --}}
                                    {{-- @endif --}}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300 flex space-x-2">
                                    {{-- @if($antrian->status == 'menunggu') --}}
                                    {{-- <form action="{{ route('admin.antrian.panggil', $antrian->id) }}" method="POST"> --}}
                                    <form action="" method="POST">
                                        @csrf
                                        <button type="submit" class="px-3 py-1 bg-blue-600 hover:bg-blue-500 text-white rounded text-xs">
                                            Panggil
                                        </button>
                                    </form>
                                    {{-- @endif --}}

                                    {{-- @if($antrian->status != 'selesai') --}}
                                    {{-- <form action="{{ route('admin.antrian.selesai', $antrian->id) }}" method="POST"> --}}
                                    <form action="" method="POST">
                                        @csrf
                                        <button type="submit" class="px-3 py-1 bg-green-600 hover:bg-green-500 text-white rounded text-xs">
                                            Selesai
                                        </button>
                                    </form>
                                    {{-- @endif --}}
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
                <div class="p-4 border-t border-gray-700/50">
                    {{-- {{ $antrians->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
