<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Voyage;

class TypeVoyage extends Model
{
    protected $fillable = ['nomType'];

    public function voyages()
    {
        return $this->hasMany(Voyage::class);
    }
}
