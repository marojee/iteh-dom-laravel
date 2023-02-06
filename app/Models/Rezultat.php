<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stadion;
use App\Models\Drzava;

class Rezultat extends Model
{
    use HasFactory;

    public function stadion()
    {
        return $this->belongsTo(Stadion::class);
    }

    public function drzave()
    {
        return $this->hasMany(Drzava::class);
    }
}
