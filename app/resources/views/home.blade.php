<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> -->
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="font-sans text-gray-900 antialiased">
                <div class="w-3/4 h-96 mt-36 mx-auto">
            <h2 class="text-2xl font-bold mb-8">collection</h2>
            <div class="flex justify-between">
                <div class="w-1/4 ">
                <a href="{{ route('hotelDetail')}}">
                    <img src="css/img/hotel1.jpg" alt="" class="rounded-md">
                    <h3 class="text-lg text-center mt-6">hotel name</h3>
                </a>
                </div>
                <div class="w-1/4 ">
                <a href="{{ route('hotelDetail')}}">
                    <img src="css/img/hotel1.jpg" alt="" class="rounded-md">
                    <h3 class="text-lg text-center mt-6">hotel name</h3>
                </a>
                </div>
                <div class="w-1/4 ">
                <a href="{{ route('hotelDetail')}}">
                    <img src="css/img/hotel1.jpg" alt="" class="rounded-md">
                    <h3 class="text-lg text-center mt-6">hotel name</h3>
                </a>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
