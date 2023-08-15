@extends('app')

@section('title', 'About Us | '.config('app.name'))

@section('content')
    <img src="images/Beautiful-sky-photography-lisa-fotios.jpeg" width="200px" alt="Beautiful-sky-photography-lisa-fotios">
    <p>
        Built with &hearts; by LES TEACHERS DU NET.   
    </p>
    <p>
        <a href="{{ route('home') }}">Revenir a la page d'accueil</a>   
    </p>
    </footer>
@endsection