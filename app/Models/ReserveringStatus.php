<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReserveringStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'IsActief',
        'Opmerking',
    ];

    public function reserveringen()
    {
        return $this->hasOne(Reservering::class);
    }
}
