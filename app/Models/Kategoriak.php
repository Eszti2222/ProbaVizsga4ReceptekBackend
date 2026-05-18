<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriak extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriakFactory> */
    use HasFactory;
        protected $fillable=[
        'nev'
    ];
    
    public function receptek()
    {
        /*„Ez a model(Kategoriak) sok ilyen rekorddal(Receptek) van kapcsolatban” 'kat_id' → a másik táblában lévő FK
                |                     |
                V                     V                                */ 
        return $this->hasMany(Receptek::class, 'kat_id');
    }

}
