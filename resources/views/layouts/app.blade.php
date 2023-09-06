<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <nav>
            <a href="">Home</a>
            <a href="">About us</a>
            <a href="">Shop</a>
        </nav>
        <h1 class="text-4xl font-extrabold">CodeConnect - @yield('title')</h1>
        <hr>

        @yield('content')
    </body>
</html>
