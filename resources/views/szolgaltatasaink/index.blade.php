<x-layouts.app>
    <x-nav.breadcrumb>
        Rólunk
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="mx-16 md:mx-8 sm:mx-4">
        <div class="mb-16">
            <h2 class="mb-3 text-4xl font-bold">Szolgáltatásaink</h2>
            <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
        </div>
        <!-- Szakértő segítség -->
        <x-partials.expert-help />

        <!-- gap -->
        <div class="min-h-[90px]"></div>

        <div class="grid max-w-7xl grid-cols-2 gap-12 sm:grid-cols-1">
            <div id="szaktanacsadas" class="grid content-center">
                <h3 class="mt-16 mb-3 text-2xl font-bold">SZAKTANÁCSADÁS</h3>
                <p class="mb-3">Az ajtók megfelelő kiválasztása számos tényezőtől függ, és szakembereink itt vannak, hogy segítsenek. Tapasztalatuk és szaktudásuk révén segítenek Önnek kiválasztani az ideális belső ajtót, figyelembe véve az adott helyiség stílusát, a funkcionalitást és az egyéni igényeket. Bármilyen kérdése merülne fel az ajtók anyagáról, méretéről vagy stílusáról, állunk rendelkezésére, hogy segítsünk Önnek a legjobb döntés meghozatalában.</p>
            </div>
            <div class="grid grid-cols-1 gap-12 justify-items-center">
                {{-- <img class="w-2/3" src="{{ Vite::asset('resources/img/arcadia98kft.webp') }}" alt="Arcadia98 Kft." loading="lazy" itemprop="contentUrl" target="_blank"> --}}
            </div>
            <div id="helyszini-felmeres" class="grid content-center">
                <h3 class="mt-16 mb-3 text-2xl font-bold">HELYSZÍNI FELMÉRÉS</h3>
                <p class="mb-3">A helyszíni felmérés az ajtók beépítésének előkészítésének fontos lépése. Szakembereink készségesen elvégezik a helyszíni felmérést, hogy pontosan meghatározzák az ajtók beépítési lehetőségeit és a szükséges méreteket. Ez biztosítja, hogy az új ajtó tökéletesen illeszkedjen a helyére, minimalizálva ezzel az esetleges problémákat vagy korrekciókat.</p>
            </div>
            <div class="grid grid-cols-1 gap-12 justify-items-center">
                {{-- <img class="w-2/3" src="{{ Vite::asset('resources/img/arcadia98kft.webp') }}" alt="Arcadia98 Kft." loading="lazy" itemprop="contentUrl" target="_blank"> --}}
            </div>
            <div id="szakszeru-beepites" class="grid content-center">
                <h3 class="mt-16 mb-3 text-2xl font-bold">SZAKSZERŰ BEÉPÍTÉS</h3>
                <p class="mb-3">Az ajtók szakszerű beépítése elengedhetetlen annak érdekében, hogy azok megfelelően működjenek és hosszú élettartamúak legyenek. Szakembereink precízen és gondosan végzik el az ajtók beépítését, figyelembe véve az adott tér sajátosságait és az Ön egyéni igényeit. A minőségi munkavégzésnek és a részletekre való odafigyelésnek köszönhetően biztos lehet abban, hogy az újonnan beépített ajtók tökéletesen teljesítik funkciójukat és hosszú távon is megőrzik szépségüket.</p>
            </div>
            <div class="grid grid-cols-1 gap-12 justify-items-center">
                {{-- <img class="w-2/3" src="{{ Vite::asset('resources/img/arcadia98kft.webp') }}" alt="Arcadia98 Kft." loading="lazy" itemprop="contentUrl" target="_blank"> --}}
            </div>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[180px]"></div>

    <x-footer.layout />

</x-layouts.app>
