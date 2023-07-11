<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @vite(['resources/css/app.css', 'ressources/css/navbar.css', 'resources/js/app.js'])
    @if ($post)
        <title>{{ $post->title }} </title>
    @endif
</head>

<body class="bg-gray-200 dark:bg-zinc-800">
    <nav class="bg-white dark:bg-zinc-900 flex justify-around dark:text-white  shadow py-4">
        <a href="/" class="hover:text-blue-400">Home</a>
        <a href="/about"class="hover:text-blue-400">About</a>
        @auth
            <a href="/profile" class="hover:text-blue-400">Profile</a>
        @else
            <a href="/login" class="hover:text-blue-400">Login</a>
            <a href="/register" class="hover:text-blue-400">Register</a>
        @endauth
        <button onclick="toggleDarkMode()">Toggle Dark Mode</button>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
@vite(['resources/js/toggleDarkMode.js'])

</html>
