<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Voyage;
use App\Models\Confirmation;

class Demande extends Model
{
    protected $fillable = [
        'dateDemande',
        'message',
        'nomComplet',
        'numTel',
        'client_id',
        'voyage_id'
    ];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }


    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }

 
    public function confirmation()
    {
        return $this->hasOne(Confirmation::class);
    }
}
