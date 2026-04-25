<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    protected $fillable = [
    'description','prix','destination','duree','type_voyage_id'
];
}
