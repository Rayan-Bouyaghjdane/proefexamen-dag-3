<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    use HasFactory;

    protected $fillable = [
        'PersoonId',
        'OpeningstijdId',
        'TariefId',
        'BaanId',
        'PakketOptieId',
        'ReserveringStatusId',
        'Reserveringsnummer',
        'Datum',
        'AantalUren',
        'BeginTijd',
        'EindTijd',
        'AantalVolwassenen',
        'AantalKinderen',
        'IsActief',
        'Opmerking',
    ];

    public function persoon()
    {
        return $this->belongsTo(Persoon::class, 'PersoonId');
    }

    public function pakketOptie()
    {
        return $this->belongsTo(PakketOptie::class, 'PakketOptieId');
    }

    public function reserveringStatus()
    {
        return $this->belongsTo(ReserveringStatus::class, 'ReserveringStatusId');
    }
}
