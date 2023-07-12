<!DOCTYPE html>
<html lang="en" class="h-full ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite([
        'resources/css/app.css',
        'ressources/css/navbar.css',
        // 'resources/js/app.js'
    ])
    @if (!empty($post))
        <title>{{ $post->title }} </title>
    @else
        <title>Virtue Blog </title>
    @endif
</head>

<body class="bg-slate-200 dark:bg-gray-900">
    <nav class="bg-white dark:bg-gray-800 flex justify-around dark:text-white  shadow py-4">
        <a href="/" class="hover:text-blue-400">Home</a>
        <a href="/about"class="hover:text-blue-400">About</a>
        @auth
            <a href="/profile" class="hover:text-blue-400">Profile</a>
        @else
            <a href="/login" class="hover:text-blue-400">Login</a>
            <a href="/register" class="hover:text-blue-400">Register</a>
        @endauth
        <button id="dark-mode" onclick="toggleDarkMode()"> Toggle Dark Mode</button>
    </nav>
    <div class="h-full">
        @yield('content')
    </div>
    @vite(['resources/js/app.js'])
</body>
{{-- <script>
    function toggleDarkMode() {
        const html = document.documentElement;
        html.classList.toggle('dark');
    }
</script> --}}

</html>
