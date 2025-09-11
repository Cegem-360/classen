<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="description"
            content="Arcadia98 Kft. letölthető dokumentumok: Maestro kilincskatalógus online 2023.1, TUPAI kilincskatalógus 2022, SMART LOCK kilincskatalógus, Dnd kilincskatalógus 2022-2023.">
        <meta name="keywords"
            content="kilincsek, Arcadia98 Kft., letöltések, Maestro, TUPAI, SMART LOCK, Dnd, kilincskatalógus">
        <link rel="canonical" href="{{ Request::url() }}">
        <title>Kilincsek - Arcadia98 Kft.</title>
    </x-slot>
    <x-nav.breadcrumb>
        Kilincsek
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="mx-16 md:mx-8 sm:mx-4">
        <div class="mb-16">
            <h2 class="mb-3 text-4xl font-bold">Kilincsek</h2>
            <hr class="relative w-32 h-1 mt-3 mb-3 border-0 bg-sarga">
        </div>
        <div class="grid grid-cols-6 gap-12 md:grid-cols-2">
            <a href="{{ Storage::url('dl/Maestro_kilincskatalogus_online_2023.1.pdf') }}" target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/Maestro_kilincskatalogus_online_2023.1.webp') }}"
                    alt="Maestro_kilincskatalogus_online_2023.1.pdf" />
                <p class="mt-3 text-sm text-wrap">Maestro kilincskatalógus online 2023.1</p>
            </a>
            <a href="{{ Storage::url('dl/TUPAI-kilincskatalogus-2022.pdf') }}" target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/TUPAI-kilincskatalogus-2022.webp') }}"
                    alt="cover-images/TUPAI-kilincskatalogus-2022.pdf" />
                <p class="mt-3 text-sm text-wrap">TUPAI kilincskatalógus 2022</p>
            </a>
            <a href="{{ Storage::url('dl/SMART-LOCK-kilincskatalogus.pdf') }}" target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/SMART-LOCK-kilincskatalogus.webp') }}"
                    alt="SMART-LOCK-kilincskatalogus.pdf" />
                <p class="mt-3 text-sm text-wrap">SMART LOCK kilincskatalógus</p>
            </a>
            <a href="{{ Storage::url('dl/Dnd-kilincskatalogus-2022-2023.pdf') }}" target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/Dnd-kilincskatalogus-2022-2023.webp') }}"
                    alt="Dnd-kilincskatalogus-2022-2023.pdf" />
                <p class="mt-3 text-sm text-wrap">Dnd kilincskatalógus 2022-2023</p>
            </a>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[180px] md:min-h-[60px]"></div>

    <x-footer.layout></x-footer.layout>

</x-layouts.app>
