@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Apartments</h2>
        <a href="{{ route('admin.apartments.create') }}" class="btn btn-success">+ Add Apartment</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-success">
                    <tr>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Rooms</th>
                        <th>Price</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($apartments as $apartment)
                        <tr>
                            <td>{{ $apartment->title }}</td>
                            <td>{{ $apartment->location->name ?? 'N/A' }}</td>
                            <td>{{ $apartment->room->name ?? 'N/A' }}</td>
                            <td>{{ number_format($apartment->price) }} TMT</td>
                            <td class="text-end">
                                <a href="{{ route('admin.apartments.edit', $apartment->id) }}"
                                    class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.apartments.destroy', $apartment->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Delete this apartment?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No apartments found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3">
                {{ $apartments->links() }}
            </div>
        </div>
    </div>
@endsection
