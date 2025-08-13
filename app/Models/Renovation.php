<?php

namespace App\Models;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Model;

class Renovation extends Model
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
}
