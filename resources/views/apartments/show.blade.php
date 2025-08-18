@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <section class="text-white text-center py-5" style="background: linear-gradient(90deg, #11998e, #38ef7d);">
        <div class="container-xl">
            <h1 class="display-5 fw-bold">{{ $apartment->title }}</h1>
        </div>
    </section>

    <!-- Apartment Details -->
    <section class="py-5 bg-light">
        <div class="container-xl">
            <div class="row g-5 align-items-center">
                <!-- Image -->
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ $apartment->image ? asset($apartment->image) : 'https://via.placeholder.com/600x400' }}"
                            class="card-img-top rounded" alt="{{ $apartment->title }}">
                    </div>
                </div>

                <!-- Info -->
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">{{ $apartment->title }}</h2>
                    <p class="text-muted mb-4">{{ $apartment->description }}</p>

                    <ul class="list-group list-group-flush mb-4">
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item"><strong>Location:</strong> {{ $apartment->location->name ?? 'N/A' }}
                            </li>
                            <li class="list-group-item"><strong>HomeType:</strong>{{$apartment->homeType->name ?? 'N/A'}}</li>
                            <li class="list-group-item"><strong>Rooms:</strong> {{ $apartment->room->name ?? 'N/A' }}</li>
                            <li class="list-group-item"><strong>Floor:</strong> {{ $apartment->floor ?? 'N/A' }}</li>
                            <li class="list-group-item"><strong>Area:</strong> {{ $apartment->subLocation->name ?? 'N/A' }}</li>
                            <li class="list-group-item"><strong>Renovation:</strong>
                                {{ $apartment->renovation->name ?? 'N/A' }}</li>
                            <li class="list-group-item"><strong>Elevator:</strong> {{ $apartment->elevator ? 'Yes' : 'No' }}</li>
                            <li class="list-group-item"><strong>Parking:</strong> {{ $apartment->parking ? 'Yes' : 'No' }}
                            </li>
                            <li class="list-group-item"><strong>Exchange:</strong>
                                {{ $apartment->exchange ? 'Yes' : 'No' }}</li>
                            <li class="list-group-item"><strong>Phone:</strong> {{ $apartment->phone ?? 'N/A' }}</li>
                        </ul>
                    </ul>

                    <h3>
                        <span class="badge bg-success px-3 py-2"> $
                            {{ number_format($apartment->price) }} 
                        </span>
                    </h3>

                    <a href="{{ route('apartments.index') }}" class="btn btn-outline-dark mt-3">
                        ← Back to Listings
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
