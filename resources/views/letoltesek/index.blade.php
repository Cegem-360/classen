<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="description"
            content="Arcadia98 Kft. letölthető dokumentumok: bővített beltéri ajtókatalógus 2024, Dooroutlet belteri ajtó raktári üveges színek 2024, Dooroutlet ajtólap méretek és nyitási irányok, Dooroutlet utólag beépíthető falcolt tok méretek, Arcadia 98 Kft. bruttó Kiskereskedelmi árlista 2023.">
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
            <a href="{{ Storage::url('dl/Arcadia98-Kft-bovitett_belteri_ajtokatalogus-2025-HU-ENG.pdf') }}"
                target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/Arcadia98-Kft-bovitett_belteri_ajtokatalogus-2025-HU-ENG.webp') }}"
                    alt="Arcadia98-Kft-bovitett_belteri_ajtokatalogus-2025-ENG.pdf" />
                <p class="mt-3 text-sm">Arcadia98 Kft. bővített beltéri ajtókatalógus 2025-HU-ENG</p>
            </a>
            <a href="{{ Storage::url('dl/Dooroutlet_belteri_ajto_raktari_uveges_szinek_2024.pdf') }}" target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/Dooroutlet_belteri_ajto.webp') }}"
                    alt="Dooroutlet_beltéri_ajtó_raktári_üveges_színek_2024.pdf" />
                <p class="mt-3 text-sm">Dooroutlet beltéri ajtó raktári üveges színek 2024.pdf</p>
            </a>
            <a href="{{ Storage::url('dl/Arcadia 98 Kft._Bruttó_Kiskeresekdelmi_árlista_20250317.pdf') }}"
                target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/door_outlet_img.png') }}"
                    alt="Arcadia 98 Kft._Bruttó_Kiskeresekdelmi_árlista_20250317.pdf" />
                <p class="mt-3 text-sm">Arcadia98 Kft. bruttó Kiskereskedelmi árlista</p>
            </a>
            <a href="{{ Storage::url('dl/Arcadia_98_Kft_Beltéri_ajtó_katalógus_2025.pdf') }}" target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/Beltéri_ajtó_katalógus_2025.jpg') }}"
                    alt="Arcadia_98_Kft_Beltéri_ajtó_katalógus_2025.pdf" />
                <p class="mt-3 text-sm">Arcadia98 Kft. Beltéri ajtó katalógus 2025</p>
            </a>
            <a href="{{ Storage::url('dl/Dooroutlet_Szabvány_beltéri_ajtó_katalógus_2025.pdf') }}" target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/Szabvány_beltéri_ajtó_katalógus_2025.jpg') }}"
                    alt="Dooroutlet_Szabvány_beltéri_ajtó_katalógus_2025.pdf" />
                <p class="mt-3 text-sm">Dooroutlet utólag beépíthető falcolt tok méretek</p>
            </a>

        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[180px] md:min-h-[60px]"></div>

    <x-footer.layout />

</x-layouts.app>
