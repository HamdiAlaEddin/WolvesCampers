<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'telephone',
        'user_id',
    ];
    /*
     * Relation avec tables users
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function locations()
    {
        return $this->hasMany(LocationMateriel::class);
    }
    public function rondo()
    {
        return $this->belongsTo(Rondo::class);
    }
    public function Event()
    {
        return $this->belongsTo(Event::class);
    }
    public function Reserver()
    {
        return $this->hasMany(ReserverRondo::class);
    }
}
