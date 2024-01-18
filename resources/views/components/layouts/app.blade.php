<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Classen') }}</title>

        <!-- photoswipe CSS -->
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
        @vite(['resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">

        {{-- SPA Do not delete --}}
        <livewire:app />
        <div class="min-h-screen">

            <!-- Page Heading -->
            <x-layouts.navigation.navbar />
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
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>
        <!-- qTip jQuery plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.js"></script>
    </body>

</html>
