<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePersoon extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'IsActief',
        'Opmerking',
    ];

    public function persoon()
    {
        return $this->hasOne(Persoon::class);
    }
}
