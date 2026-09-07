<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Blogify') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-900 bg-white">

    <!-- Common Navbar -->
    <nav class="border-b border-gray-200 bg-white/90 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex h-20 items-center justify-between">

                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-600 text-white font-bold text-lg">
                        B
                    </div>

                    <span class="text-2xl font-bold tracking-tight text-gray-900">
                        Blog<span class="text-indigo-600">ify</span>
                    </span>
                </a>

                <!-- Navigation -->
<div class="flex items-center gap-6 md:gap-8">

    <a href="{{ route('home') }}"
       class="text-sm font-medium text-indigo-600 hover:text-indigo-600 transition">
        Home
    </a>

    <a href="{{ route('blogs.all') }}"
       class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition">
        All Blogs
    </a>

    <a href="{{ route('external.blogs') }}"
       class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition">
        External Blogs
    </a>

</div>

                <!-- Auth -->
                <div class="flex items-center gap-3">

                   @auth

    <a href="{{ route('blogs.my') }}"
       class="inline-flex rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition">
        My Blogs
    </a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit"
            class="rounded-lg bg-gray-900 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-800 transition">
            Logout
        </button>
    </form>

@else

    <a href="{{ route('login') }}"
       class="inline-flex px-4 py-2 text-sm font-semibold text-gray-700 hover:text-indigo-600 transition">
        Login
    </a>

    <a href="{{ route('register') }}"
       class="rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 transition">
        Create Account
    </a>

@endauth

                </div>

            </div>
        </div>
    </nav>


    <!-- Page Content -->
    {{ $slot }}


</body>
</html>