<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\Dokter;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index()
    {
        $polis = Poli::withCount('dokters')->paginate(10); // Add pagination with 10 items per page
        $totalDokter = Dokter::count();

        // Get poli with most doctors
        $mostPopularPoli = Poli::withCount('dokters')
            ->orderBy('dokters_count', 'desc')
            ->first();

        // Sample recent activities
        $recentActivities = [
            [
                'icon' => 'plus',
                'message' => 'Poli Umum ditambahkan',
                'time' => '2 menit lalu'
            ],
            [
                'icon' => 'edit',
                'message' => 'Poli Gigi diperbarui',
                'time' => '1 jam lalu'
            ],
            [
                'icon' => 'user-md',
                'message' => 'Dr. Andi ditambahkan ke Poli Anak',
                'time' => '3 jam lalu'
            ]
        ];

        return view('admin.page.poli.index', compact(
            'polis',
            'totalDokter',
            'mostPopularPoli',
            'recentActivities'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string|max:10|unique:polis,code'
        ]);

        Poli::create([
            'name' => $request->nama,
            'code' => $request->kode
        ]);

        return redirect()->route('poli')->with('success', 'Poli berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $poli = Poli::findOrFail($id);
        if (!$poli) {
            return redirect()->back()->with('error', 'Data poli tidak ditemukan!');
        }

        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string|max:10|unique:polis,code,'.$poli->id
        ]);

        $poli->update([
            'name' => $request->nama,
            'code' => $request->kode
        ]);

        return redirect()->route('poli')->with('success', 'Poli berhasil diperbarui');
    }

    public function destroy(Poli $poli)
    {
        if($poli->dokters()->count() > 0) {
            return redirect()->back()->with('error', 'Tidak dapat menghapus poli yang memiliki dokter');
        }

        $poli->delete();
        return redirect()->route('poli')->with('success', 'Poli berhasil dihapus');
    }
}
