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
}
