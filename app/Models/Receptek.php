<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receptek extends Model
{
    /** @use HasFactory<\Database\Factories\ReceptekFactory> */
    use HasFactory;
        protected $fillable=[
        'nev',
        'kat_id',
        'kep_eleresi_ut',
        'leiras',
    ];
    
    public function kategoria()
    {
            /*„Ez a model(Receptek) ehhez a táblához tartozik(Kategoriak)” 'kat_id' → ez a külső kulcs
                |                       |
                V                       V                                */       
        return $this->belongsTo(Kategoriak::class, 'kat_id');
    }

}






