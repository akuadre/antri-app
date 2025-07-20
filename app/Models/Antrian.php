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
}
