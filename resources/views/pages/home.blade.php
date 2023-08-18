@extends('layouts.app', ['title' => config('app.name')])

@section('content')
    <img src="{{ asset('images/all-devices-white.png') }}" width="200px" alt="all-devices-white" class="mt-12 rounded shadow-md h-32">
    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Port-au-Prince</h1>
    <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}.</p>
@endsection