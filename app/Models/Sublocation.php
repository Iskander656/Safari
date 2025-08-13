<?php

namespace App\Models;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Model;

class Sublocation extends Model
{
    protected $fillable = [
        'name',
        'location_id',
    ];

    protected $guarded = [
        'id',
    ];
    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
