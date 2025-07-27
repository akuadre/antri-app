@extends('layouts.app')
@section('title', 'Kelola Antrian')

@section('content')
<div class="relative z-10 flex min-h-screen">
    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <header class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg border-b border-gray-200 dark:border-gray-700/50 p-6 sticky top-0 z-20 transition-colors duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Kelola Antrian</h1>
                    <p class="text-gray-600 dark:text-gray-400">Manajemen antrian pasien</p>
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
        <h2 class="mt-6 px-6 text-[28px] font-bold text-gray-800 dark:text-white">Informasi Antrian</h2>
        <!-- Statistik -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-blue-300 dark:hover:border-blue-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Total Antrian</p>
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
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Selesai</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">{{ $selesaiCount }}</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-check-circle text-green-500 dark:text-green-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-yellow-300 dark:hover:border-yellow-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Diproses</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">{{ $prosesCount }}</p>
                    </div>
                    <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-stethoscope text-yellow-500 dark:text-yellow-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-purple-300 dark:hover:border-purple-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Menunggu</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">{{ $menungguCount }}</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-hourglass-half text-purple-500 dark:text-purple-400 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Title Data -->
        <div class="px-6 pt-2 flex justify-between items-center">
            <h2 class="text-[28px] font-bold text-gray-800 dark:text-white">Antrian Per Poli</h2>
            <div class="flex items-center space-x-2">
                <button onclick="window.location.reload()" class="px-3 py-2 bg-emerald-500 hover:bg-emerald-400 text-white rounded-lg text-sm flex items-center space-x-1 transition duration-300">
                    <i class="fas fa-sync-alt text-sm"></i>
                    <span>Refresh</span>
                </button>
            </div>
        </div>

        <!-- Data Antrian Card View -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($polis as $poli)
                    @php
                        $colorMap = [
                            'PU' => 'blue',
                            'PG' => 'rose',
                            'PA' => 'green',
                            'PK'  => 'purple',
                            'PT' => 'yellow',
                            'PS' => 'stone',
                            'lainnya' => 'gray',
                        ];

                        $color = $colorMap[strtoupper($poli->code)] ?? 'slate'; // default fallback

                        // Get today's queues for this poli
                        $todayQueues = $antrians->filter(function($antrian) use ($poli) {
                            return $antrian->poli_id == $poli->id;
                        });

                        $currentAntrian = $todayQueues->where('status', 'diproses')->first();
                        $nextAntrian = $todayQueues->where('status', 'menunggu')->sortBy('created_at')->first();
                        $completedToday = $todayQueues->where('status', 'selesai')->count();
                    @endphp

                    <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg rounded-xl border border-gray-200 flex flex-col justify-around dark:border-gray-700/50 p-6 hover:shadow-lg hover:border-{{ $color }}-400 dark:hover:border-{{ $color }}-500 transition-all duration-300">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 dark:text-white">{{ $poli->name }}</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">{{ $completedToday }} selesai hari ini</p>
                            </div>
                            <span class="px-2 py-1 text-xs rounded-full bg-{{ $color }}-100 dark:bg-{{ $color }}-500/20 text-{{ $color }}-600 dark:text-{{ $color }}-400">
                                {{ $poli->code }}
                            </span>
                        </div>

                        <!-- Current Queue -->
                        <div class="mb-6 p-4 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Sedang Diproses</p>
                            @if($currentAntrian)
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-2xl font-bold text-gray-800 dark:text-white">{{ $currentAntrian->nomor_antrian }}</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">{{ $currentAntrian->pasien->name }}</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Dr. {{ $currentAntrian->dokter->name }}</p>
                                    </div>
                                    <form action="{{ route('antrian.selesai', $currentAntrian->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" onclick="confirmSelesai(event, {{ $currentAntrian->id }})" class="px-3 py-1 bg-green-600 hover:bg-green-500 text-white rounded text-xs transition duration-300">
                                            Selesai
                                        </button>
                                    </form>
                                </div>
                            @else
                                <p class="text-gray-400 dark:text-gray-500 italic">Tidak ada antrian</p>
                            @endif
                        </div>

                        <!-- Next Queue -->
                        <div class="mb-4 p-4 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Antrian Berikutnya</p>
                            @if($nextAntrian)
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-xl font-bold text-gray-800 dark:text-white">{{ $nextAntrian->nomor_antrian }}</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">{{ $nextAntrian->pasien->name }}</p>
                                    </div>
                                    <form action="{{ route('antrian.panggil', $nextAntrian->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" onclick="confirmPanggil(event, {{ $nextAntrian->id }})" class="px-3 py-1 bg-{{ $color }}-600 hover:bg-{{ $color }}-500 text-white rounded text-xs transition duration-300">
                                            Panggil
                                        </button>
                                    </form>
                                </div>
                            @else
                                <p class="text-gray-400 dark:text-gray-500 italic">Tidak ada antrian</p>
                            @endif
                        </div>

                        <!-- Queue Count -->
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500 dark:text-gray-400">Total Antrian:</span>
                            <span class="font-medium text-gray-700 dark:text-gray-300">
                                {{ $todayQueues->where('status', 'menunggu')->count() }} menunggu
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Aktivitas Terkini -->
        <div class="px-6 pb-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-200 dark:border-gray-700/50 p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Aktivitas Terkini</h3>
                <div class="space-y-4">
                    @foreach($antrians->take(3) as $activity)
                        @php
                            $status = $activity->status;

                            if ($status === 'menunggu') {
                                $bgClass = 'bg-yellow-100 dark:bg-yellow-500/20 text-yellow-500 dark:text-yellow-400';
                                $icon = 'fa-clock';
                                $statusText = 'ditambahkan';
                            } elseif ($status === 'diproses') {
                                $bgClass = 'bg-blue-100 dark:bg-blue-500/20 text-blue-500 dark:text-blue-400';
                                $icon = 'fa-user-md';
                                $statusText = 'dipanggil';
                            } else {
                                $bgClass = 'bg-green-100 dark:bg-green-500/20 text-green-500 dark:text-green-400';
                                $icon = 'fa-check';
                                $statusText = 'diselesaikan';
                            }
                        @endphp
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center {{ $bgClass }}">
                                <i class="fas {{ $icon }}"></i>
                            </div>

                            <div>
                                <p class="text-sm font-medium text-gray-800 dark:text-white">
                                    Antrian {{ $activity->nomor_antrian }} - {{ $activity->poli->name }} {{ $statusText }}
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">
                                    {{ $activity->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
