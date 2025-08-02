@extends('layouts.app')
@section('title', 'Kelola Dokter')

@section('content')
<div class="relative z-10 flex min-h-screen" x-data="dokterModal()">
    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <header class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg border-b border-gray-200 dark:border-gray-700/50 p-6 sticky top-0 z-20 transition-colors duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Kelola Dokter</h1>
                    <p class="text-gray-600 dark:text-gray-400">Manajemen data dokter klinik</p>
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
        <div class="mt-6 px-6 flex justify-between">
            <h2 class="text-[28px] font-bold text-gray-800 dark:text-white">Informasi Dokter</h2>
            <button @click="openModal()" class="px-4 py-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white rounded-lg font-medium transition-all duration-300 flex items-center space-x-2">
                <i class="fas fa-plus"></i>
                <span>Tambah Dokter</span>
            </button>
        </div>
        <!-- Statistik -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-blue-300 dark:hover:border-blue-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Total Dokter</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">{{ $dokters->total() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-user-md text-blue-500 dark:text-blue-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-pink-300 dark:hover:border-pink-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Dokter Teraktif</p>
                        <p class="text-xl font-bold text-gray-800 dark:text-white mt-2">{{ $mostActiveDokter->name ?? '-' }}</p>
                    </div>
                    <div class="w-12 h-12 bg-pink-100 dark:bg-pink-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-star text-pink-500 dark:text-pink-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-purple-300 dark:hover:border-purple-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Poli Terbanyak</p>
                        <p class="text-2xl font-bold text-gray-800 dark:text-white mt-2">{{ $mostPopularPoli->name ?? '-' }}</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-clinic-medical text-purple-500 dark:text-purple-400 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Dokter Card View -->
        <div class="px-6 pt-2 flex justify-between items-center">
            <h2 class="text-[28px] font-bold text-gray-800 dark:text-white">Data Dokter</h2>
            <div class="flex items-center space-x-2">
                <div class="relative">
                    <input type="text" placeholder="Cari dokter..." class="bg-gray-100 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg px-4 py-2 text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 text-sm">
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($dokters as $dokter)
                <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg rounded-xl border border-gray-200 dark:border-gray-700/50 p-6 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-start space-x-4 mb-4">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-full flex items-center justify-center shadow-md overflow-hidden">
                            @if($dokter->photo)
                                <img src="{{ asset('images/dokter/' . $dokter->photo) }}" alt="{{ $dokter->name }}" class="w-full h-full object-cover">
                            @else
                                <i class="fas fa-user-md text-white text-2xl"></i>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white truncate">{{ $dokter->name }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">{{ $dokter->poli->name }}</p>
                        </div>
                    </div>

                    <!-- Jadwal Praktek -->
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-500/20 rounded-lg flex items-center justify-center">
                                <i class="fas fa-calendar-alt text-blue-500 dark:text-blue-400 text-sm"></i>
                            </div>
                            <div>
                                @php
                                    $hari = collect(explode(',', $dokter->hari_kerja))
                                            ->map(fn($day) => ucfirst(trim($day)))
                                            ->join(', ');
                                @endphp
                                <p class="text-sm font-medium text-gray-800 dark:text-white">Hari Praktek</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">{{ $hari }}</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-green-100 dark:bg-green-500/20 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-green-500 dark:text-green-400 text-sm"></i>
                            </div>
                            <div>
                                @php
                                    $jam = \Carbon\Carbon::parse($dokter->start_time)->format('H:i').' - '.
                                        \Carbon\Carbon::parse($dokter->end_time)->format('H:i');
                                @endphp
                                <p class="text-sm font-medium text-gray-800 dark:text-white">Jam Praktek</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">{{ $jam }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-6 flex space-x-2">
                        <button @click="editDokter({{ json_encode($dokter) }})" class="flex-1 px-3 py-2 bg-yellow-100 dark:bg-yellow-500/20 hover:bg-yellow-200 dark:hover:bg-yellow-500/30 text-yellow-600 dark:text-yellow-400 rounded-lg transition-all duration-300 flex items-center justify-center space-x-1">
                            <i class="fas fa-edit text-xs"></i>
                            <span class="text-sm">Edit</span>
                        </button>
                        <form action="{{ route('dokter.destroy', $dokter->id) }}" id="hapusDokterForm{{ $dokter->id }}" method="POST" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="confirmHapusDokter(event, {{ $dokter->id }})" class="w-full px-3 py-2 bg-red-100 dark:bg-red-500/20 hover:bg-red-200 dark:hover:bg-red-500/30 text-red-600 dark:text-red-400 rounded-lg transition-all duration-300 flex items-center justify-center space-x-1">
                                <i class="fas fa-trash-alt text-xs"></i>
                                <span class="text-sm">Hapus</span>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Pagination -->
        <div class="px-6 pb-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-200 dark:border-gray-700/50 p-4">
                <div class="flex flex-col sm:flex-row justify-between items-center">
                    <div class="mb-2 sm:mb-0 text-sm text-gray-600 dark:text-gray-400">
                        Menampilkan {{ $dokters->firstItem() }} sampai {{ $dokters->lastItem() }} dari {{ $dokters->total() }} entri
                    </div>
                    <div class="flex space-x-1">
                        @if($dokters->onFirstPage())
                            <button disabled class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-lg text-gray-400 dark:text-gray-500 text-sm">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                        @else
                            <a href="{{ $dokters->previousPageUrl() }}" class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-lg text-gray-700 dark:text-gray-300 text-sm hover:bg-gray-300 dark:hover:bg-gray-600">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        @endif

                        @foreach(range(1, $dokters->lastPage()) as $i)
                            <a href="{{ $dokters->url($i) }}" class="px-3 py-1 {{ $dokters->currentPage() == $i ? 'bg-blue-600 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300' }} rounded-lg text-sm">
                                {{ $i }}
                            </a>
                        @endforeach

                        @if($dokters->hasMorePages())
                            <a href="{{ $dokters->nextPageUrl() }}" class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-lg text-gray-700 dark:text-gray-300 text-sm hover:bg-gray-300 dark:hover:bg-gray-600">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        @else
                            <button disabled class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-lg text-gray-400 dark:text-gray-500 text-sm">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Aktivitas Terkini -->
        <div class="px-6 pb-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-200 dark:border-gray-700/50 p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Aktivitas Terkini</h3>
                <div class="space-y-4">
                    @foreach($recentActivities as $activity)
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-500/20 rounded-full flex items-center justify-center">
                            <i class="fas fa-{{ $activity['icon'] }} text-blue-500 dark:text-blue-400"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800 dark:text-white">{{ $activity['message'] }}</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $activity['time'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Add/Edit Modal -->
    <div x-show="isOpen" x-transition.opacity.duration.200ms
        x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
        <div x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="bg-white/90 dark:bg-gray-800/90 border border-gray-200 dark:border-gray-700/50 rounded-xl p-6 w-full max-w-md"
            @click.away="closeModal">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white" x-text="modalTitle"></h3>
                <button @click="closeModal" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-white">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form x-bind:action="formAction" method="POST" enctype="multipart/form-data">
                @csrf
                <template x-if="isEditMode">
                    @method('PUT')
                </template>
                <input type="hidden" name="id" x-model="formData.id">

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-1">Nama Dokter</label>
                        <input type="text" name="nama" x-model="formData.nama" required
                               class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20" placeholder="Masukkan Nama">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-1">Poli</label>
                        <select name="poli_id" x-model="formData.poli_id" required
                                class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg text-gray-800 dark:text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20">
                            <option value="" disabled selected>Pilih Poli</option>
                            @foreach($polis as $poli)
                            <option value="{{ $poli->id }}">{{ $poli->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-1">Hari Praktek</label>
                        <div class="grid grid-cols-2 gap-2">
                            @php
                                $days = [
                                    'senin' => 'Senin',
                                    'selasa' => 'Selasa',
                                    'rabu' => 'Rabu',
                                    'kamis' => 'Kamis',
                                    'jumat' => 'Jumat',
                                    'sabtu' => 'Sabtu',
                                ];
                            @endphp

                            @foreach($days as $key => $day)
                            <div class="flex items-center">
                                <input
                                    type="checkbox"
                                    name="hari_kerja[]"
                                    id="day_{{ $key }}"
                                    value="{{ $key }}"
                                    x-model="formData.hari_kerja"
                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700"
                                >
                                <label for="day_{{ $key }}" class="ml-2 text-sm text-gray-700 dark:text-gray-300">{{ $day }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-1">Jam Mulai</label>
                            <input type="time" name="start_time" x-model="formData.start_time" required
                                   class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg text-gray-800 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-1">Jam Selesai</label>
                            <input type="time" name="end_time" x-model="formData.end_time" required
                                   class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg text-gray-800 dark:text-white">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-1">Foto Dokter</label>

                        <!-- Foto saat ini -->
                        <template x-if="formData.photo">
                            <div class="mb-2">
                                <p class="text-xs text-gray-500 dark:text-gray-400">Foto saat ini:</p>
                                <img :src="'/images/dokter/' + formData.photo" alt="Foto Dokter" class="w-24 h-24 object-cover rounded-full border border-gray-300 dark:border-gray-600">
                            </div>
                        </template>

                        <!-- Input foto baru -->
                        <input type="file" name="photo"
                            class="w-full mt-1 px-4 py-2 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg text-gray-800 dark:text-white file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" @click="closeModal"
                            class="px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white rounded-lg transition-all duration-300">
                        Batal
                    </button>
                    <button type="submit"
                            class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-lg transition-all duration-300">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('dokterModal', () => ({
        isOpen: false,
        isEditMode: false,
        modalTitle: 'Tambah Dokter Baru',
        formAction: "{{ route('dokter.store') }}",
        formData: {
            id: '',
            nama: '',
            poli_id: '',
            hari_kerja: [],
            start_time: '08:00',
            end_time: '15:00',
            photo: null
        },

        openModal() {
            this.isOpen = true;
            this.isEditMode = false;
            this.modalTitle = 'Tambah Dokter Baru';
            this.formAction = "{{ route('dokter.store') }}";
            this.resetForm();
        },

        closeModal() {
            this.isOpen = false;
        },

        resetForm() {
            this.formData = {
                id: '',
                nama: '',
                poli_id: '',
                hari_kerja: [],
                start_time: '08:00',
                end_time: '15:00',
                photo: null
            };
        },

        editDokter(dokter) {
            this.isOpen = true;
            this.isEditMode = true;
            this.modalTitle = 'Edit Dokter';
            this.formAction = `/dokter/update/${dokter.id}`;

            // Konversi string hari kerja ke array
            const hariKerja = typeof dokter.hari_kerja === 'string'
                ? dokter.hari_kerja.split(',').map(day => day.trim().toLowerCase())
                : [];

            this.formData = {
                id: dokter.id,
                nama: dokter.name,
                poli_id: dokter.poli_id,
                hari_kerja: hariKerja,
                start_time: dokter.start_time.substring(0, 5), // Format HH:MM
                end_time: dokter.end_time.substring(0, 5),     // Format HH:MM
                photo: dokter.photo
            };
        }
    }));
});
</script>
@endsection
