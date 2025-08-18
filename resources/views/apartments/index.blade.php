@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="text-white text-center py-5" style="background: linear-gradient(90deg, #11998e, #38ef7d);">
        <div class="container">
            <h1 class="display-4 fw-bold">Our Apartments</h1>
            <p class="lead mb-0">Find the perfect place to call home</p>
        </div>
    </section>

    <!-- Apartments Header + Role-based Button -->
    <section class="py-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Available Apartments</h2>

                @auth
                    @if (Auth::user()->role === 'admin')
                        <a href="{{ route('admin.apartments.create') }}" class="btn btn-success">Add Apartment</a>
                    @elseif(Auth::user()->role === 'user')
                        <a href="{{ route('my-apartments.create') }}" class="btn btn-primary">Add Your Home</a>
                    @endif
                @endauth
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-3 bg-white">
        <div class="container">
            <form method="GET" action="{{ route('apartments.index') }}" class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Search by title or description"
                        value="{{ request('search') }}">
                </div>
                <div class="col-md-3">
                    <select name="price_range" class="form-select">
                        <option value="">Select Price Range</option>
                        <option value="0-1000" {{ request('price_range') == '0-1000' ? 'selected' : '' }}>Up to 1000 TMT
                        </option>
                        <option value="1000-3000" {{ request('price_range') == '1000-3000' ? 'selected' : '' }}>1000 - 3000
                            TMT</option>
                        <option value="3000+" {{ request('price_range') == '3000+' ? 'selected' : '' }}>Above 3000 TMT
                        </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="location_id" class="form-select">
                        <option value="">Select Location</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->id }}"
                                {{ request('location_id') == $location->id ? 'selected' : '' }}>
                                {{ $location->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success w-100">Filter</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Apartment Cards -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @forelse($apartments as $apartment)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow h-100">
                            <img src="{{ asset($apartment->image ?? 'https://via.placeholder.com/400x250') }}"
                                class="card-img-top" alt="{{ $apartment->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $apartment->title }}</h5>
                                <p class="card-text">{{ Str::limit($apartment->description, 80) }}</p>
                                <p class="fw-bold text-success mb-2">{{ number_format($apartment->price) }} TMT</p>
                                <a href="{{ route('apartments.show', $apartment->id) }}" class="btn btn-success">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No apartments found.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $apartments->links() }}
            </div>
        </div>
    </section>

    @include('layouts.footer')
@endsection
