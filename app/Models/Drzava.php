<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rezultat;

class Drzava extends Model
{
    use HasFactory;

    public function rezultati()
    {
        return $this->hasMany(Rezultat::class);
    }
}
