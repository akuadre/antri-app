<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = [
        'name', 'poli_id',
        'start_day', 'end_day',
        'start_time', 'end_time'
    ];

    // Relasi ke poli
    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }

    // Relasi ke antrian
    public function antrians()
    {
        return $this->hasMany(Antrian::class);
    }

    // Accessor untuk jadwal
    public function getJadwalArrayAttribute()
    {
        return explode(', ', $this->jadwal);
    }
}
