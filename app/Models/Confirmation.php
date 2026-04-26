<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Demande;

class Confirmation extends Model
{
    protected $fillable = [
        'dateConfirmation',
        'demande_id'
    ];

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }
}
