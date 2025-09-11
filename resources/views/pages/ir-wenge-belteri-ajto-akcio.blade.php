<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">

        <title>IR-WENGE CPL Beltéri Ajtó Akció - Arcadia 98 Kft.</title>
        <meta name="description"
            content="IR-WENGE CPL fóliás beltéri ajtó akciós áron! 94.900 Ft helyett 79.900 Ft-ért átfogó tokkal. Magas kopásállóság, prémium minőség, azonnal elvihető raktárról.">
        <meta name="keywords"
            content="IR-WENGE beltéri ajtó, CPL fóliás ajtó, akciós ajtó, beltéri ajtó akció, Arcadia 98 Kft., Budapest">
        <link rel="canonical" href="{{ Request::url() }}">

    </x-slot>

    <x-nav.breadcrumb>
        IR-WENGE CPL Beltéri Ajtó Akció
    </x-nav.breadcrumb>

    <!-- Hero Image - teljes szélességű -->
    <div class="w-full mb-8">
        <img src="{{ Vite::asset('resources/img/Arcadia-Facebook-poszt.webp') }}" alt="IR-WENGE CPL beltéri ajtó akció"
            class="w-full h-auto object-cover">
    </div>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg p-8 mb-8 shadow-lg border border-gray-200">
            <div class="text-center">
                <div class="flex items-center justify-center mb-4">
                    <span class="text-4xl mr-2">🎉</span>
                    <h1 class="text-3xl lg:text-4xl font-bold text-szurke">
                        CPL beltéri ajtó kiárusítás!
                    </h1>
                    <span class="text-4xl ml-2">🎉</span>
                </div>

                <div class="bg-white rounded-lg p-6 shadow-md mb-6 max-w-2xl mx-auto">
                    <h2 class="text-xl font-semibold mb-4 text-szurke">IR-WENGE CPL fóliás beltéri ajtó átfogó tokkal
                    </h2>
                    <div class="flex items-center justify-center gap-4 mb-4">
                        <span class="text-2xl text-gray-500 line-through font-medium">94.900 Ft</span>
                        <span class="text-3xl text-smaragd font-bold">79.900 Ft</span>
                        <span class="bg-sarga text-szurke px-3 py-1 rounded-full text-sm font-medium">-15%</span>
                    </div>
                    <p class="text-gray-600 text-sm">Megtakarítás: 15.000 Ft</p>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8 border border-gray-200">
            <h2 class="text-2xl font-bold text-szurke mb-6 text-center">Miért érdemes választani?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-smaragd rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">✓</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-szurke mb-2">Magas kopásállóság</h3>
                        <p class="text-gray-600">Hosszú távon megőrzi szépségét és funkcionalitását</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-smaragd rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">✓</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-szurke mb-2">CPL fóliás felület</h3>
                        <p class="text-gray-600">Könnyen tisztítható, prémium minőség</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-smaragd rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">✓</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-szurke mb-2">1. osztályú, Magyar Szabvány méretű ajtó</h3>
                        <p class="text-gray-600">Garantált minőség és megfelelőség</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-smaragd rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">✓</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-szurke mb-2">Azonnal elvihető raktárról</h3>
                        <p class="text-gray-600">Amíg a készlet tart!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info Section -->
        <div class="bg-gray-50 rounded-lg p-8 mb-8 border border-gray-200">
            <h2 class="text-2xl font-bold text-szurke mb-4">További lehetőségek</h2>
            <p class="text-gray-700 mb-4">
                Ha más színt, vagy még kedvezőbb árú megoldást keres, nézze meg teljes raktári ajtóválasztékunkat,
                vagy további prémium kollekcióinkat! Oldalunkon többféle stílus és árkategória várja!
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="/kollekciok/Rakt%C3%A1ri%20ajt%C3%B3k"
                    class="inline-flex items-center px-6 py-3 bg-smaragd text-white font-medium rounded-lg hover:bg-zold transition-colors">
                    Raktári ajtók megtekintése
                </a>
                <a href="{{ route('category.index') }}"
                    class="inline-flex items-center px-6 py-3 bg-szurke text-white font-medium rounded-lg hover:opacity-90 transition-opacity">
                    Prémium kollekciók
                </a>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-gradient-to-r from-sarga to-yellow-300 rounded-lg p-8 text-center shadow-lg">
            <h2 class="text-3xl font-bold mb-4 text-szurke">Ne maradjon le, foglalja le most kedvenc ajtaját!</h2>
            <p class="text-xl mb-6 text-szurke">Korlátozott készlet - Akciós ár csak készlet erejéig!</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('kapcsolat') }}"
                    class="inline-flex items-center px-8 py-4 bg-white text-szurke font-bold rounded-lg hover:bg-gray-100 transition-colors text-lg shadow-md">
                    Kapcsolatfelvétel
                </a>
                <a href="tel:+36143033440"
                    class="inline-flex items-center px-8 py-4 bg-smaragd text-white font-bold rounded-lg hover:bg-zold transition-colors text-lg shadow-md">
                    Tel: +36 1 430 3344
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer.layout></x-footer.layout>
</x-layouts.app>
