@extends('layout.main')

@section('content')
    <div class="card">
        <div class="card-header">
            Home
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            {{ $user }}
        </div>
    </div>
    <div class="mt-5 bg-light p-5 rounded">
        <h1>Navbar example</h1>
        <p class="lead"> {{ $user }} </p>
        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a>
    </div>
@endsection
