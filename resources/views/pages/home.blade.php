<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello city</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <h1>Hello from Port-au-Prince</h1>
        <p>It's currently {{ date('h:i A') }}.</p>
        <footer>
            <p>
                &copy; Copyright &middot; {{ date('Y') }} <a href="/about-us">About Us</a>
            </p>
        </footer>
    </body>
</html>
