<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    protected $fillable=[
      'name',
      'description',
      'quantite',
      'prix',
      'etat',
      'image',
      'option',
    ];
    public function locations()
    {
        return $this->hasMany(LocationMateriel::class);
    }
}
