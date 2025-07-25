<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class AntrianController extends Controller
{public function index()
    {
        $antrians = Antrian::with(['pasien', 'poli', 'dokter'])
            ->whereDate('created_at', today())
            ->orderBy('status')
            ->orderBy('created_at')
            ->get();
        $totalAntrian = Antrian::whereDate('tanggal', today())->count();
        $selesaiCount = Antrian::whereDate('tanggal', today())->where('status', 'selesai')->count();

        $polis = Poli::all();
        $dokters = Dokter::all();

        return view('admin.page.antrian.index', compact('antrians', 'polis', 'dokters', 'totalAntrian', 'selesaiCount'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'poli_id' => 'required|exists:polis,id',
            'dokter_id' => 'required|exists:dokters,id',
            'keluhan' => 'nullable|string'
        ]);

        // Generate nomor antrian
        $lastAntrian = Antrian::whereDate('created_at', today())->count();
        $nomorAntrian = 'A-' . str_pad($lastAntrian + 1, 3, '0', STR_PAD_LEFT);

        Antrian::create([
            'nomor_antrian' => $nomorAntrian,
            'nama_pasien' => $request->nama_pasien,
            'poli_id' => $request->poli_id,
            'dokter_id' => $request->dokter_id,
            'keluhan' => $request->keluhan,
            'status' => 'menunggu'
        ]);

        return redirect()->route('antrian')->with('success', 'Antrian berhasil ditambahkan');
    }

    public function edit($id)
    {
        // $antrian = Antrian::findOrFail($id);
        // $polis = Poli::all();
        // $dokters = Dokter::all();

        // return view('admin.edit-antrian', compact('antrian', 'polis', 'dokters'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'poli_id' => 'required|exists:polis,id',
            'dokter_id' => 'required|exists:dokters,id',
            'keluhan' => 'nullable|string'
        ]);

        $antrian = Antrian::findOrFail($id);
        $antrian->update($request->all());

        return redirect()->route('antrian')->with('success', 'Antrian berhasil diperbarui');
    }

    public function destroy($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->delete();

        return redirect()->route('antrian')->with('success', 'Antrian berhasil dihapus');
    }

    public function panggil($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->update([
            'status' => 'dipanggil',
            'waktu_panggil' => now()
        ]);

        return redirect()->route('antrian')->with('success', 'Antrian berhasil dipanggil');
    }

    public function selesai($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->update([
            'status' => 'selesai',
            'waktu_selesai' => now()
        ]);

        return redirect()->route('antrian')->with('success', 'Antrian ditandai selesai');
    }
    public function batalkan($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->update(['status' => 'dibatalkan']);

        return back()->with('success', 'Antrian dibatalkan');
    }
}
