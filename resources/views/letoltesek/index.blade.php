<x-layouts.app>
    <x-nav.breadcrumb>
        Letöltések
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="mx-16">
        <div class="mb-16">
            <h2 class="mb-3 text-4xl font-bold">Letöltések</h2>
            <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
        </div>
        <div class="grid grid-cols-6 gap-12 md:grid-cols-2">
            <a href="{{ Vite::asset('resources/img/dl/Dooroutlet_belteri_ajto_raktari_uveges_szinek_2024.pdf') }}"
                wire:navigate target="blank">
                <img src="{{ Vite::asset('resources/img/dl/cover-images/Dooroutlet_belteri_ajto.webp') }}"
                    alt="Dooroutlet_beltéri_ajtó_raktári_üveges_színek_2024.pdf" />
                <p class="mt-3 text-sm">Dooroutlet beltéri ajtó raktári üveges színek 2024.pdf</p>
            </a>
            <a class=""
                href="{{ Vite::asset('resources/img/dl/Dooroutlet-ajtolap-meretek-es-nyitasi-iranyok.pdf') }}"
                wire:navigate target="blank">
                <img src="{{ Vite::asset('resources/img/dl/cover-images/Dooroutlet-ajtolap-meretek-es-nyitasi-iranyok.webp') }}"
                    alt="Dooroutlet ajtólap méretek és nyitási irányok.pdf" />
                <p class="mt-3 text-sm">Dooroutlet ajtólap méretek és nyitási irányok.pdf</p>
            </a>
            <a class=""
                href="{{ Vite::asset('resources/img/dl/Dooroutlet-utolag-beepitheto-falcolt-tok-meretek.pdf') }}"
                wire:navigate target="blank">
                <img src="{{ Vite::asset('resources/img/dl/cover-images/Dooroutlet-utolag-beepitheto-falcolt-tok-meretek.webp') }}"
                    alt="Dooroutlet utólag beépíthető falcolt tok méretek.pdf" />
                <p class="mt-3 text-sm">Dooroutlet utólag beépíthető falcolt tok méretek.pdf</p>
            </a>
            <a class=""
                href="{{ Vite::asset('resources/img/dl/Arcadia98-Kft-brutto-Kiskereskedelmi-arlista-2023.pdf') }}"
                wire:navigate target="blank">
                <img src="{{ Vite::asset('resources/img/dl/cover-images/Arcadia98-arlista-2023.webp') }}"
                    alt="Arcadia 98 Kft. - bruttó Kiskereskedelmi árlista 2023.pdf" />
                <p class="mt-3 text-sm">Arcadia 98 Kft. - bruttó Kiskereskedelmi árlista 2023.pdf</p>
            </a>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[180px]"></div>

    <x-footer.layout />

</x-layouts.app>