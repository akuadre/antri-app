@extends('layouts.app')
@section('title', 'Kelola Poli')

@section('content')
<div class="relative z-10 flex min-h-screen">
    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900">
        <header class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg border-b border-gray-200 dark:border-gray-700/50 p-6 sticky top-0 z-20">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Kelola Poli</h1>
                    <p class="text-gray-600 dark:text-gray-400">Manajemen data poli</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button onclick="toggleModal()" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white rounded-lg font-medium transition-all duration-300 flex items-center space-x-2">
                        <i class="fas fa-plus"></i>
                        <span>Tambah Poli</span>
                    </button>
                    <button onclick="toggleTheme()" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors duration-300">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:inline"></i>
                    </button>
                </div>
            </div>
        </header>

        <!-- Title  -->
        <h2 class="mt-6 ml-8 text-[28px] font-bold text-gray-800 dark:text-white">Data Poli</h2>
        <!-- Table Poli -->
        <div class="p-6">
            <div class="bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-200 dark:border-gray-700/50 overflow-hidden">
                <div class="p-4 border-b border-gray-200 dark:border-gray-700/50">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Daftar Poli</h2>
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
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $poli->dokters->count() }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300 flex space-x-2">
                                    <button onclick="editPoli({{ $poli->id }})" class="px-3 py-1 bg-yellow-600 hover:bg-yellow-500 text-white rounded text-xs">
                                        Edit
                                    </button>
                                    @if($poli->dokters->count() == 0)
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1 bg-red-600 hover:bg-red-500 text-white rounded text-xs">
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
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Modal -->
<div id="poliModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/50 backdrop-blur-sm">
    <div class="bg-white/90 dark:bg-gray-800/90 border border-gray-200 dark:border-gray-700/50 rounded-xl p-6 w-full max-w-md">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white" id="modalPoliTitle">Tambah Poli Baru</h3>
            <button onclick="toggleModal()" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-white">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <form id="poliForm" method="POST">
            @csrf
            <input type="hidden" id="poliId" name="id">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-1">Nama Poli</label>
                    <input type="text" name="nama_poli" id="namaPoli" class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-300 mb-1">Kode Poli</label>
                    <input type="text" name="kode_poli" id="kodePoli" class="w-full px-4 py-2 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600/50 rounded-lg text-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20" required>
                </div>
            </div>
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" onclick="toggleModal()" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white rounded-lg transition-all duration-300">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-lg transition-all duration-300">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
