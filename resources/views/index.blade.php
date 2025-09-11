<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">

        <title>
            ARCADIA98 KFT. - FA MINTÁZATÚ BELTÉRI AJTÓK, FESTETT BELTÉRI AJTÓK, MODUL BELTÉRI AJTÓK, TECHNIKAI
            BELTÉRI AJTÓK
        </title>
        <meta name="description"
            content="Az Arcadia 98 Kft. több évtizedes tapasztalattal rendelkezik a beltéri ajtók forgalmazásában. Kínálatunkban festett ajtók, fa mintázatú ajtók és többféle stílusú ajtó is megtalálható, széles méretválasztékban. Ajtóink kiváló minőségűek, tartósak és esztétikusak.">
        <meta name="keywords"
            content="beltéri ajtók, festett ajtók, fa mintázatú ajtók, modern ajtók, klasszikus ajtók, rusztikus ajtók, Budapest, Citroën utca 4., Arcadia 98 Kft.">
    </x-slot>
    <!-- Hero banner -->
    <x-partials.hero-banner-3 />

    <!-- Ajto tipusok -->
    <x-partials.door-categories />

    <!-- fb kampany -->
    <a href="/ir-wenge-belteri-ajto-akcio/">
        <img src="{{ Vite::asset('resources/img/Arcadia-Facebook-poszt.webp') }}" alt="Facebook kampány"
            class="w-full h-auto object-cover">
    </a>

    <!-- Elonyok -->
    <x-partials.elonyok />

    <!-- blog -->
    {{-- <x-partials.blog /> --}}

    <div class="flex flex-wrap items-center justify-end mx-auto text-white bg-cover ad-banner h-1/2"
        style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/kozepso_banner_hatter.webp') }}');">
        <div class="banner-container -mt-12 mb-12 h-[50vh] w-1/2 bg-zold_attetszo px-16 py-24 sm:w-full">
            <h3 class="max-w-lg mb-8 text-2xl font-bold">Fa mintázatú beltéri ajtók, a természetesség nevében</h3>
            <p class="max-w-lg mb-8 text-lg">
                Élvezze a modern ajtók adta lehetőségeket, teremtse meg álmai otthonát megkötések és kompromisszumok
                nélkül.</p>
            <a class="flex items-center justify-between gap-6 px-3 py-1 border-white group w-fit border-1"
                href="{{ route('category.index', ['g' => 'purpose', 'q' => 'wood_door']) }}" wire:navigate>
                <h3 class="text-sm font-bold text-white">{{ __('Go to wood pattern doors') }}</h3>
                <div class="transition-transform scale-75 group-hover:translate-x-2">
                    <x-doors.partials.arrow-right class="![fill:white]"></x-doors.partials.arrow-right>
                </div>
            </a>
        </div>
    </div>
    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Termekek carousel -->
    <x-partials.blog :latestBlogs='$latestBlogs' />
    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Kollekciok grid -->
    <x-partials.collections-grid />

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Szakértő segítség -->
    <x-partials.expert-help />

    <!-- Footer -->
    <x-footer.layout></x-footer.layout>

</x-layouts.app>
