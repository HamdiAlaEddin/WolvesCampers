<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'date',
        'prix',
        'place',
        'image',
        'id_Responsable',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function ReservEvent()
    {
        return $this->hasMany(ReserverEvent::class);
    }
}
