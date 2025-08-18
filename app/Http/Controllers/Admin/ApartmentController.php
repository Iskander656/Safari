<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Location;
use App\Models\Apartment;
use App\Models\Renovation;
use App\Models\Sublocation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apartments = Apartment::with(['location', 'sublocation', 'room', 'renovation'])->paginate(10);
        return view('admin.apartments.index', compact('apartments'));
        
    }
    public function create()
    {
        return view('admin.apartments.create', [
            'locations' => Location::all(),
            'sublocations' => Sublocation::all(),
            'rooms' => Room::all(),
            'renovations' => Renovation::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric'
        ]);

        Apartment::create($request->all());
        return redirect()->route('admin.apartments.index')->with('success', 'Apartment created successfully!');
    }
    public function edit(Apartment $apartment)
    {
        return view('admin.apartments.edit', [
            'apartment' => $apartment,
            'locations' => Location::all(),
            'sublocations' => Sublocation::all(),
            'rooms' => Room::all(),
            'renovations' => Renovation::all(),
        ]);
    }
    public function update(Request $request, Apartment $apartment)
    {
        $apartment->update($request->all());
        return redirect()->route('admin.apartments.index')->with('success', 'Apartment updated successfully.');
    }
    public function destroy(Apartment $apartment)
    {
        $apartment->delete();
        return redirect()->route('admin.apartments.index')->with('success', 'Apartment deleted successfully!');
    }
}
