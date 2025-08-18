@extends('admin.layouts.app')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="fw-bold mb-4">Edit Apartment</h3>
            <form action="{{ route('admin.apartments.update', $apartment->id) }}" method="POST">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold">Title</label>
                    <input type="text" name="title" value="{{ $apartment->title }}" class="form-control" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Location</label>
                        <select name="location_id" class="form-select" required>
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}"
                                    {{ $apartment->location_id == $location->id ? 'selected' : '' }}>
                                    {{ $location->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Sublocation</label>
                        <select name="sublocation_id" class="form-select">
                            @foreach ($sublocations as $sublocation)
                                <option value="{{ $sublocation->id }}"
                                    {{ $apartment->sublocation_id == $sublocation->id ? 'selected' : '' }}>
                                    {{ $sublocation->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Rooms</label>
                        <select name="room_id" class="form-select" required>
                            @foreach ($rooms as $room)
                                <option value="{{ $room->id }}"
                                    {{ $apartment->room_id == $room->id ? 'selected' : '' }}>
                                    {{ $room->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Renovation</label>
                        <select name="renovation_id" class="form-select">
                            @foreach ($renovations as $renovation)
                                <option value="{{ $renovation->id }}"
                                    {{ $apartment->renovation_id == $renovation->id ? 'selected' : '' }}>
                                    {{ $renovation->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Price (TMT)</label>
                        <input type="number" name="price" value="{{ $apartment->price }}" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Area</label>
                        <input type="text" name="area" value="{{ $apartment->area }}" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ $apartment->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update Apartment</button>
                <a href="{{ route('admin.apartments.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
