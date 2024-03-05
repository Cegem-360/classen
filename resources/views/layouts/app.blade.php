<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Classen') }}</title>
        @vite(['resources/js/app.js'])
        <!-- photoswipe CSS -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/photoswipe@5.4.2/dist/photoswipe.css" rel="stylesheet" />
        <!-- qTip jQuery plugin -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.css" rel="stylesheet" />
        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @isset($style)
            <style>
                {{ $style }}
            </style>
        @endisset
        <!-- Scripts -->

    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen">

            <!-- Page Heading -->
            @include('layouts.navigation.navbar')
            @if (isset($header))
                <div class="mx-auto max-w-7xl px-4 py-6 lg:px-8 sm:px-6">
                    {{ $header }}
                </div>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script>
            // Function to get cookie value by name
            function getCookie(name) {
                const cookieValue = document.cookie
                    .split('; ')
                    .find(cookie => cookie.startsWith(name + '='));

                return cookieValue ? decodeURIComponent(cookieValue.split('=')[1]) : null;
            }

            // Function to set a cookie with an expiration time in days
            function setCookie(name, value, days) {
                const expires = new Date(Date.now() + days * 24 * 60 * 60 * 1000).toUTCString();
                document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expires}; path=/`;
            }

            function initFavorites() {
                let favorites = getFavorites();
                if (favorites === null) {
                    favorites = [];
                    setFavorites(favorites);
                }

                favorites.forEach(favoriteItem => {
                    // Get the div elements by their IDs
                    var heart = document.getElementById("heart-" + favoriteItem);
                    if (heart) {
                        heart.classList.add('fill-gray-1000');
                        heart.classList.remove('fill-white');
                    }

                });
                return favorites;
            }
            var favorites = initFavorites();

            // Function to add a favorite item to the end of the array
            function toggleFavoriteItem(id) {
                let favorites = getFavorites() || [];

                const index = favorites.indexOf(id);
                var heart = document.getElementById("heart-" + id);
                if (index === -1) {
                    // Add the item to favorites if it's not already there
                    favorites.push(id);
                    if (heart) {
                        heart.classList.add('fill-gray-1000');
                        heart.classList.remove('fill-white');
                    }
                } else {
                    // Remove the item from favorites if it's already there
                    favorites.splice(index, 1);
                    if (heart) {
                        heart.classList.remove('fill-gray-1000');
                        heart.classList.add('fill-white');
                    }
                }

                setFavorites(favorites);
            }
            // Function to get favorites from cookies and parse as JSON
            function getFavorites() {
                const cookieValue = getCookie('favorites');
                return cookieValue ? JSON.parse(cookieValue) : null;
            }
            // Function to set favorites as a JSON string in a cookie
            function setFavorites(array) {
                setCookie('favorites', JSON.stringify(array), 30);
            }
        </script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>
        <!-- qTip jQuery plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.js"></script>
    </body>

</html>
