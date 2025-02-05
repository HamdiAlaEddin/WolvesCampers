<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchatMateriel extends Model
{
    use HasFactory;
    protected $fillable=[
        'client_id',
        'materiel_id',
        'materiel_nom',
        'quantite',
        'prix',
        'date',
        'prix_total',
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
