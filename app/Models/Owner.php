<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Owner extends Authenticatable
{
    use Notifiable;

    protected $guard = 'owner';

    protected $fillable = [
        'name', 'email', 'password', 'company_name',
        'category_id', 'alamat', 'telepon',
    ];

    protected $hidden = ['password'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
