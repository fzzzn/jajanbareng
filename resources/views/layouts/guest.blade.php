<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6">
        <div class="flex flex-row gap-2">
            @if (request()->is('login'))
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full opacity-50" disabled>
                Login
            </button>
            <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Sign Up
            </a>
            @elseif (request()->is('register'))
            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Login
            </a>
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full opacity-50" disabled>
                Sign Up
            </button>
            @else
            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Login
            </a>
            <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Sign Up
            </a>
            @endif
        </div>

        <div class="w-full max-w-md mt-6 px-6 py-4 bg-white overflow-hidden">
            {{ $slot }}
        </div>
    </div>
</body>

</html>