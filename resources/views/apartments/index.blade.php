@extends('layouts.app')

@section('content')
    <section class="text-white text-center py-5" style="background: linear-gradient(90deg, #11998e, #38ef7d);">
        <div class="container">
            <h1 class="display-4 fw-bold">Our Apartments</h1>
            <p class="lead mb-0">Find the perfect place to call home</p>
        </div>
    </section>

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
                    <select name="price_range" class="form-select">
                        <option value="">Select Location</option>
                        <option value='{{ request('location') }}'>
                        </option>
                        <option value="1000-3000" {{ request('price_range') == '1000-3000' ? 'selected' : '' }}>1000 - 3000
                            TMT</option>
                        <option value="3000+" {{ request('price_range') == '3000+' ? 'selected' : '' }}>Above 3000 TMT
                        </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success w-100">Filter</button>
                </div>
            </form>
        </div>
    </section>

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
                                <a href="#" class="btn btn-success">View Details</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No apartments found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="text-white text-center py-5" style="background: linear-gradient(90deg, #38ef7d, #11998e);">
        <div class="container">
            <h2 class="fw-bold mb-3">Can't find what you're looking for?</h2>
            <p class="mb-4">Contact our team and we’ll help you find the perfect apartment.</p>
            <a href="#" class="btn btn-light btn-lg">Contact Us</a>
        </div>
    </section>
@endsection
