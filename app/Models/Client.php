<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Demande;
use App\Models\Voyage;

class Client extends Model
{
    protected $fillable = [
        'CIN',
        'nomClient',
        'prenomClient',
        'telClient',
        'emailClient',
        'passwordClient'
    ];

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }

    public function favoris()
    {
        return $this->belongsToMany(Voyage::class);
    }
}
