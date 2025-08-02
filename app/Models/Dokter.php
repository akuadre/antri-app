<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = [
        'name', 'poli_id',
        'hari_kerja',
        'start_time', 'end_time',
        'photo'
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
}
