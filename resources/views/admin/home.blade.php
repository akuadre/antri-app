@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="relative z-10 flex min-h-screen">
    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen bg-gray-900">
        <!-- Top Header -->
        <header class="bg-gray-800/60 backdrop-blur-lg border-b border-gray-700/50 p-6 sticky top-0 z-20">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-white">Dashboard Admin</h1>
                    <p class="text-gray-400">Manajemen Antrian Puskesmas</p>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-300">{{ now()->format('l, d F Y') }}</span>
                </div>
            </div>
        </header>

        <!-- Title  -->
        <h2 class="mt-6 ml-8 text-[28px] font-bold text-white">Informasi Admin</h2>
        <!-- Stats Cards -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-700/50 hover:border-blue-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm">Total Antrian Hari Ini</p>
                        {{-- <p class="text-3xl font-bold text-white mt-2">{{ $totalAntrian }}</p> --}}
                        <p class="text-3xl font-bold text-white mt-2">20</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-list-ol text-blue-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-700/50 hover:border-green-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm">Antrian Selesai</p>
                        {{-- <p class="text-3xl font-bold text-white mt-2">{{ $selesaiCount }}</p> --}}
                        <p class="text-3xl font-bold text-white mt-2">4</p>
                    </div>
                    <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-check-circle text-green-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-700/50 hover:border-purple-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm">Total Poli</p>
                        {{-- <p class="text-3xl font-bold text-white mt-2">{{ $poliCount }}</p> --}}
                        <p class="text-3xl font-bold text-white mt-2">6</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-procedures text-purple-400 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Title  -->
        <h2 class="mt-6 ml-8 text-[28px] font-bold text-white">Antrian Tiket</h2>
        <!-- Recent Activity -->
        <div class="p-6">
            <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-700/50 overflow-hidden">
                <div class="p-4 border-b border-gray-700/50">
                    <h2 class="text-lg font-semibold text-white">Antrian Terakhir</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-700/50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">No. Antrian</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Poli</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Dokter</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Waktu</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700/50">
                            {{-- @foreach($recentAntrian as $antrian) --}}
                            <tr class="hover:bg-gray-700/30">
                                {{-- <td class="px-6 py-4 text-sm font-medium text-white">{{ $antrian->nomor_antrian }}</td> --}}
                                <td class="px-6 py-4 text-sm font-medium text-white">PU-001</td>
                                {{-- <td class="px-6 py-4 text-sm text-gray-300">{{ $antrian->poli->nama_poli }}</td> --}}
                                <td class="px-6 py-4 text-sm text-gray-300">Poli Umum</td>
                                {{-- <td class="px-6 py-4 text-sm text-gray-300">{{ $antrian->dokter->nama }}</td> --}}
                                <td class="px-6 py-4 text-sm text-gray-300">Dr. Tirta</td>
                                <td class="px-6 py-4">
                                    {{-- @if($antrian->status == 'menunggu') --}}
                                        <span class="px-2 py-1 text-xs rounded-full bg-yellow-500/20 text-yellow-400">Menunggu</span>
                                    {{-- @elseif($antrian->status == 'diproses') --}}
                                        {{-- <span class="px-2 py-1 text-xs rounded-full bg-blue-500/20 text-blue-400">Diproses</span> --}}
                                    {{-- @else --}}
                                        {{-- <span class="px-2 py-1 text-xs rounded-full bg-green-500/20 text-green-400">Selesai</span> --}}
                                    {{-- @endif --}}
                                </td>
                                {{-- <td class="px-6 py-4 text-sm text-gray-300">{{ $antrian->created_at->format('H:i') }}</td> --}}
                                <td class="px-6 py-4 text-sm text-gray-300">08:30</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
