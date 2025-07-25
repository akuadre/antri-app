<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index() {
        $polis = Poli::withCount('dokters')->latest()->get();
        return view('admin.page.poli.index', compact('polis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_poli' => 'required|unique:polis',
            'kode_poli' => 'required|unique:polis|max:3'
        ]);

        Poli::create($request->all());

        return redirect()->route('poli')->with('success', 'Poli berhasil ditambahkan');
    }

    public function edit($id)
    {
        $poli = Poli::findOrFail($id);
        return view('admin.edit-poli', compact('poli'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_poli' => 'required|unique:polis,nama_poli,'.$id,
            'kode_poli' => 'required|max:3|unique:polis,kode_poli,'.$id
        ]);

        $poli = Poli::findOrFail($id);
        $poli->update($request->all());

        return redirect()->route('poli')->with('success', 'Poli berhasil diperbarui');
    }

    public function destroy($id)
    {
        $poli = Poli::findOrFail($id);

        if ($poli->dokters()->count() > 0) {
            return back()->with('error', 'Tidak bisa menghapus poli yang memiliki dokter');
        }

        $poli->delete();
        return redirect()->route('poli')->with('success', 'Poli berhasil dihapus');
    }
}
