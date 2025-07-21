<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index()
    {
        $antrians = Antrian::with(['pasien', 'poli', 'dokter'])
            ->whereDate('tanggal', today())
            ->latest()
            ->paginate(10);

        return view('admin.antrian', compact('antrians'));
    }

    public function panggil($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->update(['status' => 'diproses']);

        return back()->with('success', 'Antrian berhasil dipanggil');
    }

    public function selesai($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->update(['status' => 'selesai']);

        return back()->with('success', 'Antrian ditandai selesai');
    }

    public function batalkan($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->update(['status' => 'dibatalkan']);

        return back()->with('success', 'Antrian dibatalkan');
    }
}
