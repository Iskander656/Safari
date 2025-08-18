@extends('admin.layouts.app')

@section('content')
    <div class="text-center py-5" style="background: linear-gradient(135deg, #2e8b57 #20b2aa); color: white;">

        <h1 class="fw-bold">Safari Admin Dashbaord</h1>

        <p class="lead">You have <span class="fw-bold text-success">{{$apartmentsCount}}</span>apartments in the system</p>
    </div>
@endsection