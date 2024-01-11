<x-layouts.app>

    <x-partials.hero-banner />

    <!-- Ajto tipusok -->
    <x-partials.door-categories />

    <!-- Elonyok -->
    <x-partials.elonyok />

    <div class="mx-auto h-1/2 flex flex-wrap justify-end items-center text-white bg-cover" style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/classen_verti.webp') }}');">
        <div class="w-1/2 sm:w-full h-[50vh] -mt-12 mb-12 px-16 py-24 bg-zold_attetszo">
            <h3 class="max-w-lg mb-8 text-2xl font-bold">Fa mintázatú beltéri ajtók, a természetesség nevében</h3>
            <p class="max-w-lg text-lg">Élvezze a modern ajtók adta lehetőségeket, teremtse meg álmai otthonát megkötések és kompromisszumok nélkül.</p>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Termekek carousel -->
    <x-partials.prd-carousel />

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
