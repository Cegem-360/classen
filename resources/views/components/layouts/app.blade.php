<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <meta name="google-site-verification" content="1r1A-5l2zFHc6q7tQRiEKDz2iIvykXK-WXwqrZwHU2Q" />
        @include('googletagmanager::head')

        @isset($meta)
            {{ $meta }}
        @endisset

        @isset($style)
            <style>
                {{ $style }}
            </style>
        @endisset
        <!-- Scripts -->
        @filamentStyles
        @vite(['resources/js/app.js'])
        @cookieconsentscripts
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-GXLQG9S0K7"></script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-516794458"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'AW-516794458');
        </script>

    </head>

    <body class="font-sans antialiased">
        @include('googletagmanager::body')
        {{-- SPA Do not delete --}}
        <livewire:app />
        <div class="min-h-screen">

            <!-- Page Heading -->
            <x-layouts.navigation.navbar />
            @if (isset($header))
                <div class="px-4 py-6 mx-auto max-w-7xl lg:px-8 sm:px-6">
                    {{ $header }}
                </div>
            @endif

            <!-- Page Content -->
            <main>

                {{ $slot }}
                @livewire('notifications')
            </main>
        </div>
        <x-toaster-hub />
        @filamentScripts
        @cookieconsentview
    </body>

</html>
