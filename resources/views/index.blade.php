<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">

        <title>
            ARCADIA98 KFT. - FA MINTÁZATÚ BELTÉRI AJTÓK, FESTETT BELTÉRI AJTÓK, MODUL BELTÉRI AJTÓK, TECHNIKAI
            BELTÉRI AJTÓK
        </title>
        <meta name="description"
            content="Üdvözöljük weboldalunkon, ahol formabontó megoldásokat kínálunk a legújabb trendek szerint. Keresse meg tökéletes tapéta és compact ajtóinkat, hogy enteriőre tökéletesen illeszkedjen.">
        <meta name="keywords"
            content="tapéta ajtó, compact ajtórendszer, belső ajtók, trendek, enteriőr, formabontó megoldások, fa mintázatú beltéri ajtók, festett beltéri ajtók, modul beltéri ajtók, technikai beltéri ajtók">
    </x-slot>
    <!-- Hero banner -->
    <x-partials.hero-banner-3 />

    <!-- Ajto tipusok -->
    <x-partials.door-categories />

    <!-- Elonyok -->
    <x-partials.elonyok />

    <div class="flex flex-wrap items-center justify-end mx-auto text-white bg-cover ad-banner h-1/2"
        style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/kozepso_banner_hatter.webp') }}');">
        <div class="banner-container -mt-12 mb-12 h-[50vh] w-1/2 bg-zold_attetszo px-16 py-24 sm:w-full">
            <h3 class="max-w-lg mb-8 text-2xl font-bold">Fa mintázatú beltéri ajtók, a természetesség nevében</h3>
            <p class="max-w-lg mb-8 text-lg">Élvezze a modern ajtók adta lehetőségeket, teremtse meg álmai otthonát
                megkötések
                és kompromisszumok nélkül.</p>
            <a class="flex items-center justify-between gap-6 px-3 py-1 border-white group w-fit border-1"
                href="{{ route('category.index', ['g' => 'purpose', 'q' => 'wood_door']) }}" wire:navigate>
                <h3 class="text-sm font-bold text-white">{{ __('Go to wood pattern doors') }}</h3>
                <div class="transition-transform scale-75 group-hover:translate-x-2"><x-doors.partials.arrow-right
                        class="![fill:white]"></x-doors.partials.arrow-right></div>
            </a>
        </div>
    </div>
    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Termekek carousel -->
    <x-partials.prd-carousel :categories=$categories />
    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Kollekciok grid -->
    <x-partials.collections-grid />

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Szakértő segítség -->
    <x-partials.expert-help />

    <!-- Footer -->
    <x-footer.layout />

</x-layouts.app>
