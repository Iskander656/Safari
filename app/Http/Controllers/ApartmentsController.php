<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Location;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApartmentsController extends Controller
{
    public function index(Request $request)
{
    $apartments = Apartment::query();

    if ($request->filled('location_id')) {
        $apartments->where('location_id', $request->location_id);
    }
    if ($request->filled('room_id')) {
        $apartments->where('room_id', $request->room_id);
    }
    if ($request->filled('min_price')) {
        $apartments->where('price', '>=', $request->min_price);
    }
    if ($request->filled('max_price')) {
        $apartments->where('price', '<=', $request->max_price);
    }

    $apartments = $apartments->latest()->paginate(9);

    return view('apartments.index', [
        'apartments' => $apartments,
        'locations' => Location::all(),
        'rooms' => Room::all()
    ]);
}

}