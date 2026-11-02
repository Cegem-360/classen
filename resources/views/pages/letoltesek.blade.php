<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="description"
            content="Arcadia98 Kft. letölthető dokumentumok: beltéri ajtó katalógus 2025, Dooroutlet beltéri ajtókatalógus MSZ, bruttó kiskereskedelmi árlista 2026.04.01.">
        <meta name="keywords"
            content="letöltések, Arcadia98 Kft., beltéri ajtók, katalógus, árlista, Dooroutlet, méretek, nyitási irányok">
        <link rel="canonical" href="{{ Request::url() }}">
        <title>Letöltések - Arcadia98 Kft.</title>
    </x-slot>
    <x-nav.breadcrumb>
        Letöltések
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="mx-16 md:mx-8 sm:mx-4">
        <div class="mb-16">
            <h2 class="mb-3 text-4xl font-bold">Letöltések</h2>
            <hr class="relative w-32 h-1 mt-3 mb-3 border-0 bg-sarga">
        </div>
        <div class="grid grid-cols-6 gap-12 md:grid-cols-2">
            <a href="{{ Storage::url('dl/arcadia98-belteri-ajto-katalogus-2025.pdf') }}" target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/Belteri_ajto_katalogus_2025.jpg') }}"
                    alt="Arcadia98 Kft. beltéri ajtó katalógus 2025" />
                <p class="mt-3 text-sm">Arcadia98 Kft. beltéri ajtó katalógus 2025</p>
            </a>
            {{-- <a href="{{ Storage::url('dl/Arcadia_98_Kft_Belteri_ajto_katalogus_2025.pdf') }}" target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/Belteri_ajto_katalogus_2025.jpg') }}"
                    alt="Arcadia_98_Kft_Beltéri_ajtó_katalógus_2025.pdf" />
                <p class="mt-3 text-sm">Arcadia98 Kft. bővített beltéri ajtókatalógus 2025-HU-ENG</p>
            </a> --}}
            <a href="{{ Storage::url('dl/dooroutlet-belteri-ajtokatalogus-msz.pdf') }}" target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/Szabvany_belteri_ajto_katalogus_2025.jpg') }}"
                    alt="Dooroutlet beltéri ajtókatalógus MSZ" />
                <p class="mt-3 text-sm">Dooroutlet beltéri ajtókatalógus MSZ</p>
            </a>
            <a href="{{ Storage::url('dl/arcadia98-brutto-kiskereskedelmi-arlista-2026-04-01.pdf') }}"
                target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/door_outlet_img.png') }}"
                    alt="Arcadia98 Kft. bruttó kiskereskedelmi árlista 2026.04.01." />
                <p class="mt-3 text-sm">Arcadia98 Kft. bruttó kiskereskedelmi árlista (2026.04.01.)</p>
            </a>

        </div>
    </div>

    <!-- gap -->
    <div class="min-h-45 md:min-h-[60px]"></div>

    <x-footer.layout />

</x-layouts.app>
