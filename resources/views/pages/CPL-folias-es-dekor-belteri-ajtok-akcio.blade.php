<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">

        <title>CPL fóliás és dekor beltéri ajtók akció – 59.400 Ft-tól | Arcadia 98 Kft.</title>
        <meta name="description"
            content="CPL fóliás és dekor beltéri ajtók nagy akcióban 59.400 Ft-tól átfogó tokkal! -26% kedvezmény, azonnal elvihető raktárról. Magas kopásállóság, prémium kivitel. Ne maradjon le!">
        <meta name="keywords"
            content="CPL beltéri ajtó akció, dekor beltéri ajtó akció, CPL fóliás ajtó, beltéri ajtó 59.400 Ft-tól, Arcadia 98 Kft., raktári ajtó, kiárusítás">
        <link rel="canonical" href="{{ Request::url() }}">

    </x-slot>

    <x-slot name="schema">
        <x-schema.faq-cpl />
    </x-slot>

    <x-nav.breadcrumb>
        CPL fóliás és dekor beltéri ajtók akció
    </x-nav.breadcrumb>

    <!-- Hero Image - teljes szélességű -->
    <div class="w-full mb-8">
        <img src="{{ Vite::asset('resources/img/CPL-folias-es-dekor-belteri-ajtok-akcio-banner-2.webp') }}"
            alt="IR-WENGE CPL beltéri ajtó akció" class="w-full h-auto object-cover">
    </div>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Akció kiemelt ár blokk (külön CPL és Dekor) -->
        <div
            class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg p-8 md:p-10 mb-10 shadow-lg border border-gray-200">
            <div class="text-center space-y-8">
                <h2 class="text-3xl lg:text-4xl font-bold text-szurke flex items-center justify-center gap-2">
                    <span class="text-4xl">🎉</span>
                    <span>CPL fóliás és dekor beltéri ajtó kiárusítás!</span>
                    <span class="text-4xl">🎉</span>
                </h2>
                <div class="bg-white rounded-xl p-8 shadow-md max-w-5xl mx-auto">
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-10 items-start text-left md:text-left">
                        <!-- CPL -->
                        <div class="space-y-3 relative">
                            <h3 class="text-lg font-semibold text-szurke tracking-wide uppercase">CPL fóliás beltéri
                                ajtó</h3>
                            <p class="text-4xl font-extrabold text-smaragd leading-tight">79.900 Ft</p>
                            <p class="text-sm font-medium text-szurke uppercase tracking-wide border-t pt-2">IR Wenge
                                felülettel, átfogó tokkal</p>
                        </div>
                        <!-- Dekor -->
                        <div class="space-y-3 relative">
                            <h3 class="text-lg font-semibold text-szurke tracking-wide uppercase">Dekor ajtó</h3>
                            <p class="text-4xl font-extrabold text-smaragd leading-tight">59.400 Ft</p>
                            <p class="text-sm font-medium text-szurke uppercase tracking-wide border-t pt-2">Natúrtölgy
                                felülettel, átfogó tokkal</p>
                        </div>
                    </div>
                    {{-- <div class="mt-10 flex justify-center">
                        <a href="#tovabbi-reszletek"
                            class="inline-flex items-center gap-2 px-10 py-4 rounded-full bg-sarga text-szurke font-bold shadow hover:brightness-105 focus:outline-none focus:ring-2 focus:ring-sarga/60 transition">
                            További részletek
                            <span class="text-xl leading-none">›</span>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Előnyök / Miért érdemes -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-10 border border-gray-200">
            <h2 class="text-2xl font-bold text-szurke mb-6 text-center">Miért érdemes választani?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @php
                    $features = [
                        [
                            'title' => 'Magas kopásállóság',
                            'text' => 'Hosszú távon megőrzi szépségét és funkcionalitását',
                        ],
                        [
                            'title' => 'CPL fóliás & dekor felület',
                            'text' => 'Könnyen tisztítható, prémium minőségű megoldás',
                        ],
                        ['title' => '1. osztályú szabvány méret', 'text' => 'Megbízható minőség és megfelelőség'],
                        ['title' => 'Azonnal elvihető raktárról', 'text' => 'Akció a készlet erejéig!'],
                    ];
                @endphp
                @foreach ($features as $f)
                    <div class="flex items-start gap-4">
                        <div class="w-9 h-9 bg-smaragd rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-base">✓</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-szurke mb-1">{{ $f['title'] }}</h3>
                            <p class="text-gray-600 text-sm">{{ $f['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- További lehetőségek -->
        <div class="bg-gray-50 rounded-lg p-8 mb-10 border border-gray-200">
            <h2 class="text-2xl font-bold text-szurke mb-5">További lehetőségek</h2>
            <p class="text-gray-700 mb-5">Ha más színt vagy még kedvezőbb árú megoldást keres, nézze meg teljes raktári
                ajtókínálatunkat, vagy böngésszen prémium kollekcióink között! Számos stílus és felület áll
                rendelkezésére.</p>
            <div class="flex flex-wrap gap-4">
                <a href="/kollekciok/Rakt%C3%A1ri%20ajt%C3%B3k"
                    class="inline-flex items-center px-6 py-3 bg-smaragd text-white font-medium rounded-lg hover:bg-zold transition-colors">Raktári
                    ajtók</a>
                <a href="{{ route('category.index') }}"
                    class="inline-flex items-center px-6 py-3 bg-szurke text-white font-medium rounded-lg hover:opacity-90 transition-opacity">Prémium
                    kollekciók</a>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-gradient-to-r from-sarga to-yellow-300 rounded-lg p-8 text-center shadow-lg">
            <h2 class="text-3xl font-bold mb-4 text-szurke">Ne maradjon le, foglalja le most kedvenc ajtaját!</h2>
            <p class="text-xl mb-6 text-szurke">Korlátozott készlet – az akció a készlet erejéig érvényes!</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('kapcsolat') }}"
                    class="inline-flex items-center px-8 py-4 bg-white text-szurke font-bold rounded-lg hover:bg-gray-100 transition-colors text-lg shadow-md">Kapcsolatfelvétel</a>
                <a href="tel:+36143033440"
                    class="inline-flex items-center px-8 py-4 bg-smaragd text-white font-bold rounded-lg hover:bg-zold transition-colors text-lg shadow-md">Tel:
                    +36 1 430 3344</a>
            </div>
            <p class="text-xs mt-6 text-szurke/80">A feltüntetett ár tájékoztató jellegű, az áfát tartalmazza. A
                kedvezmény csak kijelölt készletre vonatkozik.</p>
        </div>
    </div>

    <!-- Footer -->
    <x-footer.layout></x-footer.layout>
</x-layouts.app>
