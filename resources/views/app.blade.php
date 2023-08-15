<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">

        @yield('content')

        <footer>
            <p>
                &copy; Copyright {{ date('Y') }} 

                @if(!Route::is('about'))
                    &middot; <a href="{{ route('about') }}">About Us</a>
                @endif
            </p>
        </footer>
    </body>
</html>