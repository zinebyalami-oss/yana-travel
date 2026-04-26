<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TypeVoyage;

class Voyage extends Model
{
    protected $fillable = [
        'image',
        'description',
        'prix',
        'destination',
        'duree',
        'type_voyage_id'
    ];

    protected $casts = [
        'prix' => 'float',
    ];

    public function type()
    {
        return $this->belongsTo(TypeVoyage::class);
    }
}
