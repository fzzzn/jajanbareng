<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head></x-head>

<body class="font-sans text-gray-900 antialiased">
    <div class="flex mx-auto min-h-screen w-full flex-col justify-center items-center bg-gray-100 p-6">
        <div class="max-w-lg w-full flex flex-col justify-center items-center">
            <img class="h-[150px] mb-4" src="{{ asset('logo.png') }}" alt="logo">
            @if (request()->is('login'))
            <h1 class="font-bold text-3xl">Masuk</h1>
            <hr class="h-[2px] my-6 bg-black w-full border-0">
            @elseif (request()->is('register'))

            <h1 class="font-bold text-3xl">Daftar</h1>
            <hr class="h-[2px] my-6 bg-black w-full border-0">
            @else
            @endif
            <div class="flex flex-row gap-2">
                @if (request()->is('login'))
                <button class="bg-gray-400 text-white font-bold py-2 px-4 rounded-full opacity-70" disabled>
                    Masuk
                </button>
                <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Daftar
                </a>
                @elseif (request()->is('register'))
                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Masuk
                </a>
                <button class="bg-gray-400 text-white font-bold py-2 px-4 rounded-full opacity-70" disabled>
                    Daftar
                </button>
                @else
                @endif
            </div>

            <div class="w-full max-w-md mt-6 px-6 py-4 bg-white overflow-hidden">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>