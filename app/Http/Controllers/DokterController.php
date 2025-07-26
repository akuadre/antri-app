<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::with(['poli', 'antrians'])
                    ->withCount('antrians')
                    ->orderBy('antrians_count', 'desc')
                    ->paginate(10);

        $mostActiveDokter = Dokter::withCount('antrians')
                            ->orderBy('antrians_count', 'desc')
                            ->first();

        $mostPopularPoli = Poli::withCount('dokters')
                        ->orderBy('dokters_count', 'desc')
                        ->first();

        $polis = Poli::withCount('dokters')
                ->orderBy('dokters_count', 'desc')
                ->get();

        $recentActivities = [
            [
                'icon' => 'user-md',
                'message' => 'Dr. '.($dokters->first()->name ?? 'Baru').' ditambahkan',
                'time' => now()->subHours(2)->diffForHumans()
            ],
            [
                'icon' => 'calendar-check',
                'message' => 'Jadwal dokter diperbarui',
                'time' => now()->subDays(1)->diffForHumans()
            ],
            [
                'icon' => 'stethoscope',
                'message' => 'Antrian baru diproses',
                'time' => now()->subHours(5)->diffForHumans()
            ]
        ];

        return view('admin.page.dokter.index', compact(
            'dokters',
            'mostActiveDokter',
            'mostPopularPoli',
            'recentActivities',
            'polis'
        ));
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
            'hari_kerja' => 'required|array',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);


        $orderedDays = collect($request->hari_kerja)->sortBy(function ($day) {
            $dayOrder = [
                'senin' => 1,
                'selasa' => 2,
                'rabu' => 3,
                'kamis' => 4,
                'jumat' => 5,
                'sabtu' => 6,
                'minggu' => 7
            ];
            return $dayOrder[$day] ?? 8; // Jika tidak ada dalam mapping, taruh di akhir
        })->values()->all();

        $dokter = Dokter::findOrFail($id);
        $dokter->update([
            'name' => $request->nama,
            'poli_id' => $request->poli_id,
            'hari_kerja' => implode(',', $orderedDays),
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
