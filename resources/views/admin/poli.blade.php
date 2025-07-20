@extends('layouts.app')
@section('title', 'Kelola Poli')

@section('content')
<div class="relative z-10 flex min-h-screen">
    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen bg-gray-900">
        <header class="bg-gray-800/60 backdrop-blur-lg border-b border-gray-700/50 p-6 sticky top-0 z-20">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-white">Kelola Poli</h1>
                    <p class="text-gray-400">Manajemen data poli</p>
                </div>
                <button onclick="toggleModal()" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white rounded-lg font-medium transition-all duration-300 flex items-center space-x-2">
                    <i class="fas fa-plus"></i>
                    <span>Tambah Poli</span>
                </button>
            </div>
        </header>

        <div class="p-6">
            <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-700/50 overflow-hidden">
                <div class="p-4 border-b border-gray-700/50">
                    <h2 class="text-lg font-semibold text-white">Daftar Poli</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-700/50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Nama Poli</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Kode</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Jumlah Dokter</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700/50">
                            {{-- @foreach($polis as $poli) --}}
                            <tr class="hover:bg-gray-700/30">
                                {{-- <td class="px-6 py-4 text-sm font-medium text-white">{{ $poli->nama_poli }}</td> --}}
                                <td class="px-6 py-4 text-sm font-medium text-white">Poli Umum</td>
                                {{-- <td class="px-6 py-4 text-sm text-gray-300">{{ $poli->kode_poli }}</td> --}}
                                <td class="px-6 py-4 text-sm text-gray-300">PU</td>
                                {{-- <td class="px-6 py-4 text-sm text-gray-300">{{ $poli->dokters->count() }}</td> --}}
                                <td class="px-6 py-4 text-sm text-gray-300">1</td>
                                <td class="px-6 py-4 text-sm text-gray-300 flex space-x-2">
                                    {{-- <button onclick="editPoli({{ $poli->id }})" class="px-3 py-1 bg-yellow-600 hover:bg-yellow-500 text-white rounded text-xs"> --}}
                                    <button onclick="" class="px-3 py-1 bg-yellow-600 hover:bg-yellow-500 text-white rounded text-xs">
                                        Edit
                                    </button>
                                    {{-- @if($poli->dokters->count() == 0) --}}
                                    {{-- <form action="{{ route('admin.poli.hapus', $poli->id) }}" method="POST"> --}}
                                        {{-- @csrf --}}
                                        {{-- @method('DELETE') --}}
                                        <button type="submit" class="px-3 py-1 bg-red-600 hover:bg-red-500 text-white rounded text-xs">
                                            Hapus
                                        </button>
                                    {{-- </form> --}}
                                    {{-- @endif --}}
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Modal -->
<div id="poliModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/50 backdrop-blur-sm">
    <div class="bg-gray-800/90 border border-gray-700/50 rounded-xl p-6 w-full max-w-md">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-white" id="modalPoliTitle">Tambah Poli Baru</h3>
            <button onclick="toggleModal()" class="text-gray-400 hover:text-white">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <form id="poliForm" method="POST">
            @csrf
            <input type="hidden" id="poliId" name="id">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1">Nama Poli</label>
                    <input type="text" name="nama_poli" id="namaPoli" class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600/50 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1">Kode Poli</label>
                    <input type="text" name="kode_poli" id="kodePoli" class="w-full px-4 py-2 bg-gray-700/50 border border-gray-600/50 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20" required>
                </div>
            </div>
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" onclick="toggleModal()" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition-all duration-300">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-lg transition-all duration-300">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

{{-- <script>
function toggleModal() {
    document.getElementById('poliModal').classList.toggle('hidden');
    document.getElementById('poliModal').classList.toggle('flex');

    // Reset form when opening for new entry
    if (!document.getElementById('poliModal').classList.contains('hidden')) {
        document.getElementById('modalPoliTitle').innerText = 'Tambah Poli Baru';
        document.getElementById('poliForm').action = "{{ route('admin.poli.simpan') }}";
        document.getElementById('poliForm').reset();
        document.getElementById('poliId').value = '';
    }
}

function editPoli(id) {
    fetch(`/admin/poli/${id}/edit`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('modalPoliTitle').innerText = 'Edit Poli';
            document.getElementById('poliForm').action = "{{ route('admin.poli.update') }}";
            document.getElementById('poliId').value = data.id;
            document.getElementById('namaPoli').value = data.nama_poli;
            document.getElementById('kodePoli').value = data.kode_poli;
            toggleModal();
        });
}
</script> --}}
@endsection
