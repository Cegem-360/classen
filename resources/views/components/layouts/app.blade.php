<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="google-site-verification" content="1r1A-5l2zFHc6q7tQRiEKDz2iIvykXK-WXwqrZwHU2Q" />
        <title>{{ config('app.name', 'Classen') }}</title>

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
        @cookieconsentscripts
    </head>

    <body class="font-sans antialiased">

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

            </main>
        </div>
        <x-toaster-hub />
        @cookieconsentview
    </body>

</html>
