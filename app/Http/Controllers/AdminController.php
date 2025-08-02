<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Poli;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $totalAntrian = Antrian::whereDate('tanggal', today())->count();
        $selesaiCount = Antrian::whereDate('tanggal', today())->where('status', 'selesai')->count();
        $recentAntrian = Antrian::with(['poli', 'dokter'])
            ->whereDate('tanggal', today())
            ->latest()
            ->take(5)
            ->get();

        return view('admin.page.dashboard.index', compact(
            'totalAntrian',
            'selesaiCount',
            'recentAntrian'
        ));
    }
}
