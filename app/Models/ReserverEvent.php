<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReserverEvent extends Model
{
    use HasFactory;
    protected $fillable=[
        'client_id',
        'event_id',
        'date',
    ];



    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
