<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">External Blog Posts</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($posts as $post)
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <span class="text-xs bg-blue-100 text-blue-800 font-semibold px-2.5 py-0.5 rounded">ID: {{ $post['id'] }}</span>
                    <h2 class="text-xl font-bold text-gray-800 mt-2 capitalize">{{ $post['title'] }}</h2>
                    <p class="text-gray-600 mt-2">{{ $post['body'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
