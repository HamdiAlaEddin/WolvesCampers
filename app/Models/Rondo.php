<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rondo extends Model
{
    use HasFactory;
    protected $fillable=[
        'destination',
        'description',
        'date',
        'duree',
        'prixinscription',
         'image',
        'guide_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function Reserver()
    {
        return $this->hasMany(ReserverRondo::class);
    }
}
