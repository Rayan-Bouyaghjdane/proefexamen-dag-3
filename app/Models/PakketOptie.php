<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PakketOptie extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'IsActief',
        'Opmerking',
    ];

    public function reserveringen()
    {
        return $this->hasMany(Reservering::class, 'PakketOptieId');
    }
}
