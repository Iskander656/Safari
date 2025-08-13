<?php

namespace App\Models;

use App\Models\Room;
use App\Models\HomeType;
use App\Models\Location;
use App\Models\Renovation;
use App\Models\Sublocation;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
        protected $fillable = [
        'title',
        'location_id',
        'sublocation_id',
        'room_id',
        'renovation_id',
        'price',
        'area',
        'floor',
        'total_floors',
        'description',
        'image',
    ];

    protected $guarded = [
        'id',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function subLocation()
    {
        return $this->belongsTo(Sublocation::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function homeType()
    {
        return $this->belongsTo(HomeType::class);
    }

    public function renovation()
    {
        return $this->belongsTo(Renovation::class);
    }
}
