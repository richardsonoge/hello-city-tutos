@extends('layouts.app', ['title' => config('app.name').' - About Us'])

@section('content')
    <img src="images/Beautiful-sky-photography-lisa-fotios.jpeg" width="200px" alt="Beautiful-sky-photography-lisa-fotios" class="my-12 rounded-full shadow-md">
    
    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET.   
    </h2>

    <p class="mt-5">
        <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir a la page d'accueil</a>   
    </p>
@endsection