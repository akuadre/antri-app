@extends('layouts.app')
@section('title', 'Kelola Dokter')

@section('content')
<div class="relative z-10 flex min-h-screen" x-data="dokterModal()">
    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900">
        <header class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg border-b border-gray-200 dark:border-gray-700/50 p-6 sticky top-0 z-20">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Kelola Dokter</h1>
                    <p class="text-gray-600 dark:text-gray-400">Manajemen data dokter</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button @click="openModal()" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white rounded-lg font-medium transition-all duration-300 flex items-center space-x-2">
                        <i class="fas fa-plus"></i>
                        <span>Tambah Dokter</span>
                    </button>
                    <button onclick="toggleTheme()" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors duration-300">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:inline"></i>
                    </button>
                </div>
            </div>
        </header>

        <!-- Title  -->
        <h2 class="mt-6 ml-8 text-[28px] font-bold text-gray-800 dark:text-white">Data Dokter</h2>
        <!-- Table Dokter -->
        <div class="p-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-200 dark:border-gray-700/50 overflow-hidden">
                <div class="p-4 border-b border-gray-200 dark:border-gray-700/50">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Daftar Dokter</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100 dark:bg-gray-700/50">
                            <tr>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Nama</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Poli</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Jadwal</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700/50">
                            @foreach($dokters as $index => $dokter)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30">
                                <td class="px-6 py-4 text-center text-sm font-medium text-gray-800 dark:text-white">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-white">{{ $dokter->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $dokter->poli->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                    <div class="flex flex-wrap gap-1">
                                        @foreach(explode(',', $dokter->start_day) as $day)
                                            <span class="px-2 py-1 text-xs rounded-full bg-blue-100 dark:bg-blue-500/20 text-blue-600 dark:text-blue-400">
                                                {{ ucfirst($day) }}:
                                                {{ \Carbon\Carbon::parse($dokter->start_time)->format('H:i') }} -
                                                {{ \Carbon\Carbon::parse($dokter->end_time)->format('H:i') }}
                                            </span>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300 flex space-x-2">
                                    <button @click="editDokter({{ $dokter->id }})" class="px-3 py-1 bg-yellow-600 hover:bg-yellow-500 text-white rounded text-xs">
                                        Edit
                                    </button>
                                    <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1 bg-red-600 hover:bg-red-500 text-white rounded text-xs">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add/Edit Modal -->
    <div x-show="isOpen" x-transition class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
        <div class="bg-white/90 dark:bg-gray-800/90 border border-gray-200 dark:border-gray-700/50 rounded-xl p-6 w-full max-w-md" @click.away="closeModal">
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
                            @foreach(['senin', 'jumat', 'selasa', 'sabtu', 'rabu', 'minggu', 'kamis'] as $day)
                            <div class="flex items-center">
                                <input type="checkbox" name="start_day[]" id="day_{{ $day }}" value="{{ $day }}"
                                       x-model="formData.start_day"
                                       class="rounded border-gray-300 dark:border-gray-600 text-blue-500 focus:ring-blue-500">
                                <label for="day_{{ $day }}" class="ml-2 text-sm text-gray-600 dark:text-gray-300 capitalize">{{ $day }}</label>
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
            start_day: [],
            start_time: '08:00',
            end_time: '15:00'
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
                start_day: [],
                start_time: '08:00',
                end_time: '15:00'
            };
        },

        async editDokter(id) {
            try {
                const response = await fetch(`/dokter/edit/${id}`);
                const data = await response.json();

                this.isOpen = true;
                this.isEditMode = true;
                this.modalTitle = 'Edit Dokter';
                this.formAction = `/dokter/update/${id}`;

                this.formData = {
                    id: data.id,
                    nama: data.nama,
                    poli_id: data.poli_id,
                    start_day: data.start_day ? data.start_day.split(',') : [],
                    start_time: data.start_time,
                    end_time: data.end_time
                };
            } catch (error) {
                console.error('Error:', error);
            }
        }
    }));
});
</script>
@endsection
