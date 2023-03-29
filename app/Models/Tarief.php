<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarief extends Model
{
    use HasFactory;

    protected $fillable = [
        'Eenheid',
        'Prijs',
        'IsActief',
        'Opmerking',
    ];

    public function reserveringen()
    {
        return $this->hasMany(Reservering::class);
    }
}
