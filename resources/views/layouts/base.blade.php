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
        <a href="/about" class="hover:text-blue-400">About</a>
        @auth
            <a href="/profile" class="hover:text-blue-400">Profile</a>
        @else
            <a href="/login" class="hover:text-blue-400">Login</a>
            <a href="/register" class="hover:text-blue-400">Register</a>
        @endauth
        <button id="dark-mode" onclick="toggleDarkMode()"
            class="bg-gray-200 dark:bg-gray-600 dark:stroke-white  p-2 sm:rounded-lg">
            {{-- Toggle Dark Mode --}}
            <div class="w-3 h-3">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    {{-- width="256" height="256"  --}} viewBox="0 0 256 256" xml:space="preserve" {{-- class="fill-white text-white" --}}>

                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <path
                            d="M 87.823 60.7 c -0.463 -0.423 -1.142 -0.506 -1.695 -0.214 c -15.834 8.398 -35.266 2.812 -44.232 -12.718 c -8.966 -15.53 -4.09 -35.149 11.101 -44.665 c 0.531 -0.332 0.796 -0.963 0.661 -1.574 c -0.134 -0.612 -0.638 -1.074 -1.259 -1.153 c -9.843 -1.265 -19.59 0.692 -28.193 5.66 C 13.8 12.041 6.356 21.743 3.246 33.35 S 1.732 57.08 7.741 67.487 c 6.008 10.407 15.709 17.851 27.316 20.961 C 38.933 89.486 42.866 90 46.774 90 c 7.795 0 15.489 -2.044 22.42 -6.046 c 8.601 -4.966 15.171 -12.43 18.997 -21.586 C 88.433 61.79 88.285 61.123 87.823 60.7 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill:inherit;  fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
            </div>
        </button>
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
