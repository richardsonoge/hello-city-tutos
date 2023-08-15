@extends('app')

@section('title', config('app.name'))

@section('content')
    <h1>Hello from Port-au-Prince</h1>
    <p>It's currently {{ date('h:i A') }}.</p>
@endsection