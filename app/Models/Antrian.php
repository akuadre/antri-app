<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    protected $fillable = [
        'nomor_antrian', 'pasien_id',
        'poli_id', 'dokter_id',
        'keluhan', 'tanggal',
        'jam_daftar', 'status'
    ];

    // Relasi ke pasien
    public function pasien()
    {
        return $this->belongsTo(User::class, 'pasien_id');
    }

    // Relasi ke poli
    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }

    // Relasi ke dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    // Scope untuk antrian hari ini
    public function scopeHariIni($query)
    {
        return $query->whereDate('tanggal', today());
    }

    // Scope untuk status tertentu
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
