<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    protected $fillable = ['name', 'code'];

    // Relasi ke dokter
    public function dokters()
    {
        return $this->hasMany(Dokter::class);
    }

    // Relasi ke antrian
    public function antrians()
    {
        return $this->hasMany(Antrian::class);
    }
}
