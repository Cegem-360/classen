<x-layouts.app>
    <!-- Hero banner -->
    <x-partials.hero-banner />

    <!-- Ajto tipusok -->
    <x-partials.door-categories />

    <!-- Elonyok -->
    <x-partials.elonyok />

    <div class="ad-banner mx-auto flex h-1/2 flex-wrap items-center justify-end bg-cover text-white" style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/kozepso_banner_hatter.webp') }}');">
        <div class="banner-container -mt-12 mb-12 h-[50vh] w-1/2 bg-zold_attetszo px-16 py-24 sm:w-full">
            <h3 class="mb-8 max-w-lg text-2xl font-bold">Fa mintázatú beltéri ajtók, a természetesség nevében</h3>
            <p class="mb-8 max-w-lg text-lg">Élvezze a modern ajtók adta lehetőségeket, teremtse meg álmai otthonát megkötések
                és kompromisszumok nélkül.</p>
            <a class="group flex items-center justify-between gap-6 w-fit px-3 py-1 border-1 border-white" href="{{ route('category.index') }}" wire:navigate.hover>
                <h3 class="font-bold text-sm text-white">{{ __('Go to wood pattern doors') }}</h3>
                <div class="scale-75 group-hover:translate-x-2 transition-transform"><x-doors.partials.arrow-right class="![fill:white]"></x-doors.partials.arrow-right></div>
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
