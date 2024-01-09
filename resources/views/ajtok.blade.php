<x-app-layout>

    <div class="flex">
        <div class="pt-16 pl-8 w-1/4 h-full bg-[#9f9f9f] text-white">
            <h3 class="text-xl font-bold uppercase">Ajtó kollekciók</h3>
            <hr class="relative mt-4 mb-6 w-full h-1 border-0 bg-white">
            <p class="mb-6 font-bold">Válasszon lenyűgöző ajtó kollekcióink közül.</p>
            <h3 class="mb-3 text-xl font-bold">Személyre szabott keresés</h3>
            <x-forms.product-filter />
        </div>

        <div class="mx-12 my-16 w-3/4">
            <h1 class="text-3xl font-bold uppercase">Ajtók</h1>

            <hr class="relative mt-8 mb-3 w-72 h-1 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">Lakkozott ajtók</h2>
            <x-doors.partials.ajtok-lista-lakkozott-ajtok />

            <!-- gap -->
            <div class="min-h-[60px]"></div>

            <hr class="relative mt-8 mb-3 w-72 h-1 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">Keretezett ajtók</h2>
            <x-doors.partials.ajtok-lista-keretezett-ajtok />

            <!-- gap -->
            <div class="min-h-[60px]"></div>

            <hr class="relative mt-8 mb-3 w-72 h-1 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">Furnér ajtók</h2>
            <x-doors.partials.ajtok-lista-furner-ajtok />

            <!-- gap -->
            <div class="min-h-[60px]"></div>

            <hr class="relative mt-8 mb-3 w-72 h-1 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">Bejárati ajtók</h2>
            <x-doors.partials.ajtok-lista-bejarati-ajtok />

            <!-- gap -->
            <div class="min-h-[60px]"></div>

            <hr class="relative mt-8 mb-3 w-72 h-1 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">Műszaki ajtók</h2>
            <x-doors.partials.ajtok-lista-muszaki-ajtok />

            <!-- gap -->
            <div class="min-h-[60px]"></div>

            <hr class="relative mt-8 mb-3 w-72 h-1 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">Tolóajtók</h2>
            <x-doors.partials.ajtok-lista-tolo-ajtok />

            <!-- gap -->
            <div class="min-h-[60px]"></div>

            <hr class="relative mt-8 mb-3 w-72 h-1 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">Tűzbiztos ajtók</h2>
            <x-doors.partials.ajtok-lista-tuzbiztos-ajtok />



            <!-- gap -->
            <div class="min-h-[120px]"></div>

            <h1 class="text-3xl font-bold uppercase">Ajtó keretek</h1>

            <hr class="relative mt-8 mb-3 w-72 h-1 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">Fa ajtó keretek</h2>
            <x-doors.partials.ajtok-lista-fa-ajto-keretek />

            <!-- gap -->
            <div class="min-h-[60px]"></div>

            <hr class="relative mt-8 mb-3 w-72 h-1 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">Acél ajtó keretek</h2>
            <x-doors.partials.ajtok-lista-acel-ajto-keretek />

            <!-- gap -->
            <div class="min-h-[60px]"></div>

            <hr class="relative mt-8 mb-3 w-72 h-1 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">Beltéri és tűzálló ajtó keretek</h2>
            <x-doors.partials.ajtok-lista-belteri-ajto-keretek />
        </div>
    </div>


    <!-- gap -->
    <div class="min-h-[60px]"></div>


    <x-footer.layout />

</x-app-layout>
