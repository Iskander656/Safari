<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeType extends Model
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
