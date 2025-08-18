<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Location;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HomeType;
use App\Models\Sublocation;

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
        'rooms' => Room::all(),
        'sublocations' => Sublocation::all(),
        'homeTypes' => HomeType::all(),
    ]);
}
    public function show($id)
    {
        $apartment = Apartment::findOrFail($id);
        $apartment = Apartment::with(['location', 'sublocation', 'room', 'renovation',])->findOrFail($id);
        return view('apartments.show', compact('apartment'));
    }

}