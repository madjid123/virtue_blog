<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'ressources/css/navbar.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @if ($post)
        <title>{{ $post->title }} </title>
    @endif
</head>

<body class="bg-gray-100">
    <nav class="navbar">
        <a href="/">Home</a>
        <a href="/about">About</a>
        @auth
            <a href="/profile">Profile</a>
        @else
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        @endauth
        {{-- <a href="/toggle-dark-mode">Toggle Dark Mode</a> --}}
    </nav>
    <div>
        @yield('content')
    </div>
</body>

</html>
