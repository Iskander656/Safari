<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Location;
use App\Models\Apartment;
use App\Models\Renovation;
use App\Models\Sublocation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HomeType;

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
            'hometypes' => HomeType::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'home_type_id' => 'required|exists:home_types,id',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048,'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('apartments', 'public');
        }

        Apartment::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'location_id' => $request->location_id,
            'sublocation_id' => $request->sublocation_id,
            'room_id' => $request->room_id,
            'renovation_id' => $request->renovation_id,
            'home_type_id' => $request->home_type_id,
            'price' => $request->price,
            'area' => $request->area,
            'floor' => $request->floor,
            'elevator' => $request->elevator,
            'exchange' => $request->exchange,
            'parking' => $request->parking,
            'total_floors' => $request->total_floors,
            'description' => $request->description,
            'phone' => $request->phone,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.apartments.index')
            ->with('success', 'Apartment created successfully!');
    }
    public function edit(Apartment $apartment)
    {
        return view('admin.apartments.edit', [
            'apartment' => $apartment,
            'locations' => Location::all(),
            'sublocations' => Sublocation::all(),
            'rooms' => Room::all(),
            'renovations' => Renovation::all(),
            'hometypes' => HomeType::all(),
        ]);
    }
    public function update(Request $request, Apartment $apartment)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'home_type_id' => 'required|exists:home_types,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('apartments', 'public');
        }

        $apartment->update($data);

        return redirect()->route('admin.apartments.index')
            ->with('success', 'Apartment updated successfully.');
    }
    public function destroy(Apartment $apartment)
    {
        $apartment->delete();
        return redirect()->route('admin.apartments.index')->with('success', 'Apartment deleted successfully!');
    }
}
