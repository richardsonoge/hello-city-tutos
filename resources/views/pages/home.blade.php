@extends('app')

@section('title', config('app.name'))

@section('content')
    <img src="{{ asset('images/all-devices-white.png') }}" width="200px" alt="all-devices-white">
    <h1>Hello from Port-au-Prince</h1>
    <p>It's currently {{ date('h:i A') }}.</p>
@endsection