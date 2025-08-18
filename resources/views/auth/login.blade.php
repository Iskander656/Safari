@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container col-md-6 mx-auto">
            <h2 class="mb-4 text-center">Login</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Login</button>
                <a href="{{ route('register') }}" class="btn btn-link w-100 mt-2">Don't have an account? Register</a>
            </form>
        </div>
    </section>
@endsection
