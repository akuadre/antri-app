<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::with('poli')->latest()->get();
        $polis = Poli::all();
        return view('admin.page.dokter.index', compact('dokters', 'polis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'poli_id' => 'required|exists:polis,id',
            'start_day' => 'required|array',
            'start_day.*' => 'in:senin,selasa,rabu,kamis,jumat,sabtu,minggu',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        Dokter::create([
            'nama' => $request->nama,
            'poli_id' => $request->poli_id,
            'start_day' => implode(',', $request->start_day),
            'end_day' => implode(',', $request->start_day), // Asumsi sama dengan start_day
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('dokter')->with('success', 'Dokter berhasil ditambahkan');
    }

    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        return response()->json($dokter);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'poli_id' => 'required|exists:polis,id',
            'start_day' => 'required|array',
            'start_day.*' => 'in:senin,selasa,rabu,kamis,jumat,sabtu,minggu',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $dokter = Dokter::findOrFail($id);
        $dokter->update([
            'nama' => $request->nama,
            'poli_id' => $request->poli_id,
            'start_day' => implode(',', $request->start_day),
            'end_day' => implode(',', $request->start_day),
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('dokter')->with('success', 'Dokter berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('dokter')->with('success', 'Dokter berhasil dihapus');
    }
}
