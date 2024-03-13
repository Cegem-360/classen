<x-layouts.app>
    <x-nav.breadcrumb>
        Kilincsek
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="mx-16 md:mx-8 sm:mx-4">
        <div class="mb-16">
            <h2 class="mb-3 text-4xl font-bold">Kilincsek</h2>
            <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
        </div>
        <div class="grid grid-cols-6 gap-12 md:grid-cols-2">
            <a href="{{ Storage::url('dl/Dooroutlet_belteri_ajto_raktari_uveges_szinek_2024.pdf') }}"
                target="_blank">
                <img src="{{ Vite::asset('resources/img/cover-images/Maestro_kilincskatalogus_online_2023.1.webp') }}"
                    alt="Maestro_kilincskatalogus_online_2023.1.pdf" />
                <p class="mt-3 text-sm text-wrap">Maestro kilincskatalógus online 2023.1</p>
            </a>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[180px] md:min-h-[60px]"></div>

    <x-footer.layout />

</x-layouts.app>
