<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationMateriel extends Model
{
    use HasFactory;
    protected $fillable=[
        'client_id',
        'materiel_id',
        'prix',
        'quantite',
        'date_debut',
        'date_fin',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function materiel()
    {
        return $this->belongsTo(Materiel::class);
    }
}
