<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Openingstijd extends Model
{
    use HasFactory;

    protected $fillable = [
        'DagNaam',
        'BeginTijd',
        'EindTijd',
        'IsActief',
        'Opmerking',
    ];

    public function reserveringen()
    {
        return $this->hasMany(Reservering::class);
    }
}
