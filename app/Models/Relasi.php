<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }

    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class);
    }
}
