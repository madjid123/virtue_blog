<!DOCTYPE html>
<html lang="en" class="h-full ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'ressources/css/navbar.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @if (!empty($post))
        <title>{{ $post->title }} </title>
    @else
        <title>Virtue Blog </title>
    @endif
</head>

<body class="bg-slate-200 dark:bg-gray-900">
    <nav class="bg-white dark:bg-gray-800 flex justify-around items-center dark:text-white  shadow py-4">
        <a href="/" class="hover:text-blue-400">Home</a>
        <a href="/about" class="hover:text-blue-400">About</a>
        @auth
            <a href="/profile" class="hover:text-blue-400">Profile</a>
        @else
            <a href="/login" class="hover:text-blue-400">Login</a>
            <a href="/register" class="hover:text-blue-400">Register</a>
        @endauth
        <button id="dark-mode" onclick="toggleDarkMode()"
            class="bg-gray-200 dark:bg-gray-600 dark:stroke-white  p-2 sm:rounded-lg hover:bg-blue-400 border shodow">
            {{-- Toggle Dark Mode --}}
            <div class="w-4 h-4 flex justify-center items-center">
                <i class="bi bi-moon-stars-fill text-gray-500 dark:text-white hover:text-black "></i>
            </div>
        </button>
    </nav>
    <div class="h-full">
        @yield('content')
    </div>
</body>
{{-- <script>
    function toggleDarkMode() {
        const html = document.documentElement;
        html.classList.toggle('dark');
    }
</script> --}}

</html>
