<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $guarded = [
        'id',
    ];
    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    public function sublocations()
    {
        return $this->hasMany(Sublocation::class);
    }
}
