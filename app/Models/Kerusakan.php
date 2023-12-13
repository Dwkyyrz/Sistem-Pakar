<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function relasis()
    {
        return $this->hasMany(Relasi::class, 'kerusakan_id', 'kode_kerusakan');
    }

    public function diagnosas()
    {
        return $this->hasMany(Diagnosa::class, 'kerusakan_id', 'kode_kerusakan');
    }
}
