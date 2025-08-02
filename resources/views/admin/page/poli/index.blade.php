@extends('layouts.app')
@section('title', 'Kelola Poli')

@section('content')
<div class="relative z-10 flex min-h-screen" x-data="poliModal()">
    @include('admin.components.sidebar')

    <div class="flex-1 flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <header class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg border-b border-gray-200 dark:border-gray-700/50 p-6 sticky top-0 z-20 transition-colors duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Kelola Poli</h1>
                    <p class="text-gray-600 dark:text-gray-400">Manajemen data poli klinik</p>
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
            <h2 class="text-[28px] font-bold text-gray-800 dark:text-white">Informasi Antrian</h2>
            <button @click="openModal()" class="px-4 py-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white rounded-lg font-medium transition-all duration-300 flex items-center space-x-2">
                <i class="fas fa-plus"></i>
                <span>Tambah Poli</span>
            </button>
        </div>
        <!-- Statistik -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-blue-300 dark:hover:border-blue-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Total Poli</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">{{ $polis->count() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-clinic-medical text-blue-500 dark:text-blue-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-green-300 dark:hover:border-green-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Poli Terpopuler</p>
                        <p class="text-2xl font-bold text-gray-800 dark:text-white mt-2">{{ $mostPopularPoli->name ?? '-' }}</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-star text-green-500 dark:text-green-400 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-200 dark:border-gray-700/50 hover:border-purple-300 dark:hover:border-purple-500/50 transition-all duration-300 group">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Total Dokter</p>
                        <p class="text-3xl font-bold text-gray-800 dark:text-white mt-2">{{ $totalDokter }}</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-user-md text-purple-500 dark:text-purple-400 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Title Data -->
        <div class="px-6 pt-2 flex justify-between items-center">
            <h2 class="text-[28px] font-bold text-gray-800 dark:text-white">Pengelolaan Data Poli</h2>
            <div class="flex items-center space-x-2">
                <div class="relative">
                    <input type="text" placeholder="Cari poli..." class="bg-gray-100 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg px-4 py-2 text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 text-sm">
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-200 dark:border-gray-700/50 overflow-hidden">
                <div class="p-4 border-b border-gray-200 dark:border-gray-700/50 flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Daftar Poli Klinik</h2>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-lg text-sm flex items-center space-x-1">
                            <i class="fas fa-file-export text-sm"></i>
                            <span>Export</span>
                        </button>
                        <button class="px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-lg text-sm flex items-center space-x-1">
                            <i class="fas fa-filter text-sm"></i>
                            <span>Filter</span>
                        </button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100 dark:bg-gray-700/50">
                            <tr>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Nama Poli</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Kode</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Jumlah Dokter</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700/50">
                            @foreach($polis as $index => $poli)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30">
                                <td class="px-6 py-4 text-center text-sm font-medium text-gray-800 dark:text-white">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-white">{{ $poli->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $poli->code }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $poli->dokters_count }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300 flex space-x-2">
                                    <button @click="editPoli({{ json_encode($poli) }})" class="px-3 py-1 bg-yellow-600 hover:bg-yellow-500 text-white rounded text-xs">
                                        Edit
                                    </button>
                                    @if($poli->dokters_count == 0)
                                    <form action="{{ route('poli.destroy', $poli->id) }}" id="hapusPoliForm{{ $poli->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="confirmHapusPoli(event, {{ $poli->id }})" class="px-3 py-1 bg-red-600 hover:bg-red-500 text-white rounded text-xs">
                                            Hapus
                                        </button>
                                    </form>
                                    @else
                                    <button class="cursor-none px-3 py-1 bg-red-800/40 text-white rounded text-xs" disabled>
                                        Hapus
                                    </button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="p-4 border-t border-gray-200 dark:border-gray-700/50 flex flex-col sm:flex-row justify-between items-center">
                    <div class="mb-2 sm:mb-0 text-sm text-gray-600 dark:text-gray-400">
                        Menampilkan 1 sampai {{ $polis->count() }} dari {{ $polis->total() }} entri
                    </div>
                    <div class="flex space-x-1">
                        <button class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-lg text-gray-700 dark:text-gray-300 text-sm">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-1 bg-blue-600 text-white rounded-lg text-sm">
                            1
                        </button>
                        <button class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-lg text-gray-700 dark:text-gray-300 text-sm">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

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
            <form x-bind:action="formAction" method="POST">
                @csrf
                <template x-if="isEditMode">
                    @method('PUT')
                </template>
                <input type="hidden" name="id" x-model="formData.id">

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-1">Nama Poli</label>
                        <input type="text" name="nama" x-model="formData.name" required
                               class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20" placeholder="Masukkan Nama Poli">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-1">Kode Poli</label>
                        <input type="text" name="kode" x-model="formData.code" required
                               class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20" placeholder="Masukkan Kode Poli">
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
    Alpine.data('poliModal', () => ({
        isOpen: false,
        isEditMode: false,
        modalTitle: 'Tambah Poli Baru',
        formAction: "{{ route('poli.store') }}",
        formData: {
            id: '',
            name: '',
            code: ''
        },

        init() {
            this.isOpen = false;
        },

        openModal() {
            this.isOpen = true;
            this.isEditMode = false;
            this.modalTitle = 'Tambah Poli Baru';
            this.formAction = "{{ route('poli.store') }}";
            this.resetForm();
        },

        closeModal() {
            this.isOpen = false;
        },

        resetForm() {
            this.formData = {
                id: '',
                name: '',
                code: ''
            };
        },

        editPoli(poli) {
            this.isOpen = true;
            this.isEditMode = true;
            this.modalTitle = 'Edit Poli';
            this.formAction = `/poli/update/${poli.id}`;
            this.formData = {
                id: poli.id,
                name: poli.name,
                code: poli.code
            };
        }
    }));
});
</script>
@endsection
