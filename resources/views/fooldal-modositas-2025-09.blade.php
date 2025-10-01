{{-- Ideiglenes főoldal módosításokhoz, 2025-09 --}}

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
    <!-- Hero banner (prezentációhoz) -->
    <x-partials.hero-banner-3-preview />

    <!-- Ajto tipusok -->
    <x-partials.door-categories />

    <!-- Bemutatóterem szekció (első blokk, teljes háttérrel) -->
    <section class="w-full min-h-[540px] bg-cover bg-[center_80%] relative flex items-center justify-center"
        style="background-image: url('{{ Vite::asset('resources/img/arcadia98kft.webp') }}');">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 relative z-10 flex flex-col items-center justify-center">
            <div class="max-w-2xl bg-white/60 rounded-2xl shadow-2xl p-10 backdrop-blur-[60px]">
                <h1 class="text-4xl md:text-5xl font-extrabold text-[#434B58] mb-4">Látogasson el bemutatótermünkbe!
                </h1>
                <p class="text-lg text-gray-700 mb-4">Ismerje meg személyesen kínálatunkat, nézze meg ajtóinkat élőben,
                    és tapasztalja meg a 30 év szakmai tudásunkat! Kollégáink segítenek a választásban, hogy otthonába a
                    legjobb ajtó kerüljön.</p>
                <div class="flex gap-4">
                    <a href="/kapcsolat"
                        class="px-8 py-3 bg-white text-[#978f88] font-semibold rounded shadow border border-[#978f88] hover:bg-[#f5f3f0] transition">Bemutatóterem
                        elérhetőségei</a>
                </div>
            </div>
        </div>
    </section>

    <!-- gap -->
    <div class="min-h-[30px]"></div>

    <!-- Ajánlatkérő szakasz (fotóval) -->
    <section class="w-full py-0 flex items-stretch min-h-[420px]">
        <div class="h-[540px] w-2/3 bg-cover bg-center"
            style="background-image: url('{{ Vite::asset('resources/img/arcadia-ajanlatkeres.webp') }}');">
        </div>
        <div class="w-1/3 flex items-center justify-center bg-white">
            <div class="p-10 w-full max-w-md">
                <h2 class="text-3xl font-bold text-[#978f88] mb-6 text-left">Sürgősen ajtóra van szüksége?</h2>
                <p class="max-w-lg text-lg text-gray-700 mb-8 text-left">
                    Használja ajtószűrési rendszerünket, amelyben szín, ajtótípus és anyag szerint szűrhet
                    ajtómodellekre, amelyekre konkrét árajánlatot kérhet árajánlatkérő rendszerünkön keresztül.
                </p>
                <a href="/ajtok"
                    class="px-10 py-4 bg-[#434B58] text-white font-bold rounded shadow-lg hover:bg-[#2c3240] transition text-lg block text-left">Ajánlatot
                    kérek</a>
            </div>
        </div>
    </section>

    <!-- Kiemelt kollekciók szakasz -->
    <section class="w-full py-20 bg-[#e7e3dc]">
        <div class="max-w-7xl mx-auto px-4">
            <h5 class="text-lg font-extrabold text-[#434B58] text-center mb-2 uppercase tracking-wider">Ügyfeleink
                kedvencei</h2>
                <h2 class="text-4xl font-extrabold text-[#434B58] text-center mb-4">Kiemelt
                    kollekciók</h2>
                <p class="max-w-4xl mx-auto mb-10 text-lg text-[#434B58] text-center">Fedezze fel azt a 4 kollekciót,
                    amelyet
                    vásárlóink
                    a
                    legjobban szeretnek! Modern, klasszikus és különleges megoldások, melyek minden otthonba stílust és
                    minőséget visznek.</p>
                <div class="grid grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-8">
                    <!-- Kollekció 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
                        <img src="{{ Vite::asset('resources/img/40-Jakie-drzwi-do-wnetrza-w-stylu-boho-CLIF-e1666651321909.jpg') }}"
                            alt="Clif" class="w-full h-48 object-cover">
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="text-2xl font-bold text-[#434B58] mb-2">Clif</h3>
                            <p class="text-[#434B58] mb-4">Természetes, világos enteriőrökbe ajánlott, modern stílusú
                                ajtó.
                                A Clif kollekció a letisztult otthonok kedvence.</p>
                            <a href="/kollekciok/Clif"
                                class="mt-auto px-6 py-2 bg-[#978f88] text-white font-semibold rounded shadow hover:bg-[#7c7267] transition w-fit">Megnézem</a>
                        </div>
                    </div>
                    <!-- Kollekció 2 (csere: Tosca) -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col relative">
                        <img src="{{ Vite::asset('resources/img/prd-images/thumbnails/Classen-drzwi-Tosca-dab-antracyt-400x270.jpg') }}"
                            alt="Tosca" class="w-full h-48 object-cover">
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="text-2xl font-bold text-[#434B58] mb-2">Tosca</h3>
                            <p class="text-[#434B58] mb-4">Elegáns, kortárs megjelenés, finom fa struktúrával és
                                harmonikus arányokkal. Modern otthonok megbízható választása.</p>
                            <a href="/kollekciok/Tosca"
                                class="mt-auto px-6 py-2 bg-[#978f88] text-white font-semibold rounded shadow hover:bg-[#7c7267] transition w-fit">Megnézem</a>
                        </div>
                        <span
                            class="absolute top-3 left-3 bg-[#434B58] text-white text-xs font-bold tracking-wide px-3 py-1 rounded-full shadow">ÚJ</span>
                    </div>
                    <!-- Kollekció 3 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
                        <img src="{{ Vite::asset('resources/img/Classen - Linea Premium.webp') }}" alt="Linea Premium"
                            class="w-full h-48 object-cover">
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="text-2xl font-bold text-[#434B58] mb-2">Linea Premium</h3>
                            <p class="text-[#434B58] mb-4">Letisztult, modern formavilág, prémium minőségű anyagokkal.
                                A
                                Linea Premium kollekció a minimalista elegancia kedvelőinek készült.</p>
                            <a href="/kollekciok/Linea Premium"
                                class="mt-auto px-6 py-2 bg-[#978f88] text-white font-semibold rounded shadow hover:bg-[#7c7267] transition w-fit">Megnézem</a>
                        </div>
                    </div>
                    <!-- Kollekció 4 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
                        <img src="{{ Vite::asset('resources/img/Classen - Modi Design.webp') }}" alt="Modi Design"
                            class="w-full h-48 object-cover">
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="text-2xl font-bold text-[#434B58] mb-2">Modi Design</h3>
                            <p class="text-[#434B58] mb-4">Különleges mintázatok, egyedi megjelenés, kreatív
                                enteriőrökhez.
                                A Modi Design kollekcióval igazán egyedivé teheti otthonát.</p>
                            <a href="/kollekciok/Modi Design sliding system"
                                class="mt-auto px-6 py-2 bg-[#978f88] text-white font-semibold rounded shadow hover:bg-[#7c7267] transition w-fit">Megnézem</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- Inspiráció kollekciónkból szakasz -->
    <section class="w-full py-20 bg-[#f5f3f0]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-extrabold text-[#434B58] text-center mb-4">Inspiráció kollekciónkból</h2>
            <p class="text-lg text-[#434B58] text-center mb-10">Fedezze fel a legnépszerűbb ajtó kollekcióinkat, és
                merítsen ötletet otthona megújításához!</p>
            <div class="flex justify-center gap-8 mb-8">
                <a href="/kollekciok"
                    class="flex items-center gap-3 px-8 py-3 bg-[#978f88] text-white font-semibold rounded shadow hover:bg-[#7c7267] transition text-lg group">
                    Megnézem az összes kollekciót
                    <span class="inline-block transition-transform group-hover:translate-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>
            <div class="flex justify-center gap-8">
                <!-- Inspiráció kép 1 -->
                <a href="/kollekciok/Clif" class="group relative block w-96 h-56 rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ Vite::asset('resources/img/40-Jakie-drzwi-do-wnetrza-w-stylu-boho-CLIF-e1666651321909.jpg') }}"
                        alt="Clif"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <span
                        class="absolute bottom-4 left-4 bg-white/80 text-[#434B58] px-4 py-2 rounded font-bold text-lg shadow">Clif</span>
                    <span
                        class="absolute right-4 bottom-4 text-[#978f88] group-hover:translate-x-2 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
                <!-- Inspiráció kép 2 -->
                <a href="/kollekciok/Linea Premium"
                    class="group relative block w-96 h-56 rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ Vite::asset('resources/img/Classen - Linea Premium.webp') }}" alt="Linea Premium"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <span
                        class="absolute bottom-4 left-4 bg-white/80 text-[#434B58] px-4 py-2 rounded font-bold text-lg shadow">Linea
                        Premium</span>
                    <span
                        class="absolute right-4 bottom-4 text-[#978f88] group-hover:translate-x-2 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
                <!-- Inspiráció kép 3 -->
                <a href="/kollekciok/Modi Design sliding system"
                    class="group relative block w-96 h-56 rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ Vite::asset('resources/img/Classen - Modi Design.webp') }}" alt="Modi Design"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <span
                        class="absolute bottom-4 left-4 bg-white/80 text-[#434B58] px-4 py-2 rounded font-bold text-lg shadow">Modi
                        Design</span>
                    <span
                        class="absolute right-4 bottom-4 text-[#978f88] group-hover:translate-x-2 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>


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


    <!-- Vélemények szakasz -->
    <section class="w-full py-20 bg-gray-100">
        <div class="container mx-auto space-y-8">
            <div class="flex items-center gap-24 mx-auto max-w-6xl">
                <div class="">
                    <h2 class="text-4xl font-extrabold text-[#222e38] mb-4">Rólunk mondták</h2>
                    <p class="text-lg text-[#222e38] mb-6">Igénybe vette szolgáltatásainkat? Kérjük, oszd meg
                        tapasztalataidat, hogy még több embernek segíthessünk otthonukat megújítani!</p>
                </div>
                {{-- <div class="w-fit">
                    <a href="#"
                        class="px-8 py-3 bg-[#1cb0f6] text-white font-semibold rounded shadow hover:bg-[#009ee3] transition flex items-center gap-2">
                        Vélemény írása <span class="font-bold text-lg">G</span>
                    </a>
                </div> --}}
            </div>
            <div class="flex flex-wrap justify-center gap-8">
                <!-- Google értékelés blokk -->
                {{-- <div class="p-6 flex flex-col items-center justify-center w-64">
                    <span class="text-xl font-bold text-[#222e38] mb-1">KIVÁLÓ</span>
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-400 text-3xl">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                    <span class="text-[#222e38] text-sm mb-2">104 vélemény alapján</span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
                        alt="Google" class="h-6 mt-2">
                </div> --}}
                <!-- Vélemény kártyák -->
                <div class="bg-white rounded-2xl shadow-lg p-6 w-72 flex flex-col gap-2">
                    <div class="flex flex-col gap-2 items-start mb-2">
                        <img src="{{ Vite::asset('resources/img/avatar01.png') }}" alt=""
                            class="w-8 h-8 rounded-full">
                        <span class="font-bold text-[#222e38]">Éva Bogaráné Posztós</span>
                        {{-- <span class="text-xs text-gray-500">egy éve</span> --}}
                        <img src="{{ Vite::asset('resources/img/googlelogo.svg') }}" alt="Google" class="h-4">
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-yellow-400 text-xl">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        {{-- <span class="ml-2 text-blue-500">&#10004;</span> --}}
                    </div>
                    <p class="text-[#222e38] text-base">Nagy beltéri ajtó választék található.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6 w-72 flex flex-col gap-2">
                    <div class="flex flex-col gap-2 items-start mb-2">
                        <img src="{{ Vite::asset('resources/img/avatar02.png') }}" alt=""
                            class="w-8 h-8 rounded-full">
                        <span class="font-bold text-[#222e38]">Erdős Ferenc</span>
                        {{-- <span class="text-xs text-gray-500">3 éve</span> --}}
                        <img src="{{ Vite::asset('resources/img/googlelogo.svg') }}" alt="Google" class="h-4">
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-yellow-400 text-xl">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        {{-- <span class="ml-2 text-blue-500">&#10004;</span> --}}
                    </div>
                    <p class="text-[#222e38] text-base">Szuper cég. Eladók szívélyesek. Árukiadók segítőkészek a
                        raktárban.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6 w-72 flex flex-col gap-2">
                    <div class="flex flex-col gap-2 items-start mb-2">
                        <img src="{{ Vite::asset('resources/img/avatar03.png') }}" alt=""
                            class="w-8 h-8 rounded-full">
                        <span class="font-bold text-[#222e38]">Melinda Kiss</span>
                        {{-- <span class="text-xs text-gray-500">4 éve</span> --}}
                        <img src="{{ Vite::asset('resources/img/googlelogo.svg') }}" alt="Google" class="h-4">
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-yellow-400 text-xl">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        {{-- <span class="ml-2 text-blue-500">&#10004;</span> --}}
                    </div>
                    <p class="text-[#222e38] text-base">Nagyon szimpatikus és felkészült értékesítők</p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6 w-72 flex flex-col gap-2">
                    <div class="flex flex-col gap-2 items-start mb-2">
                        <img src="{{ Vite::asset('resources/img/avatar04.png') }}" alt=""
                            class="w-8 h-8 rounded-full">
                        <span class="font-bold text-[#222e38]">Kovcs Ervin</span>
                        {{-- <span class="text-xs text-gray-500">4 éve</span> --}}
                        <img src="{{ Vite::asset('resources/img/googlelogo.svg') }}" alt="Google" class="h-4">
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-yellow-400 text-xl">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        {{-- <span class="ml-2 text-blue-500">&#10004;</span> --}}
                    </div>
                    <p class="text-[#222e38] text-base">Az eladó tisztelet tudoan hallgatta meg elképzelésem, feltárta
                        az ajtók világát, kérdéseimre precíz és teljeskörü válaszokat kaptam, ami segített a döntésben,
                        hogy milyen ajtót akarok az elkövetző években nyitogatni. 😃
                        Szép bemutató terem, felkészült eladók. Én javaslom.</p>
                </div>
            </div>
        </div>
    </section>






    <!-- Elonyok -->
    <x-partials.elonyok />






    <!-- Új szakasz: Ajtókereső és kedvencek -->
    <section class="w-full py-32 bg-cover bg-center relative"
        style="background-image: url('{{ Vite::asset('resources/img/40-Jakie-drzwi-do-wnetrza-w-stylu-boho-CLIF-e1666651321909.jpg') }}');">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto flex flex-col items-center justify-center px-4 relative z-10">
            <div class="flex gap-12">
                <div class="p-8 w-2/3 bg-white/30 shadow-2xl rounded-2xl backdrop-blur-[60px]">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Találd meg álmaid ajtaját egyszerűen!
                    </h2>
                    <p class="max-w-2xl text-lg text-gray-700 mb-8">
                        Böngéssz több mint <span class="font-bold text-[#978f88]">20&nbsp;000</span> modellünk között,
                        használd
                        a gyors keresőt, és jelöld ki kedvenceidet! Így könnyedén összehasonlíthatod az ajtókat, és
                        megtalálhatod a számodra tökéletes megoldást.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-6 w-1/3 justify-center">
                    <a href="/ajtok"
                        class="px-8 py-3 bg-[#978f88] text-white font-semibold rounded shadow hover:bg-[#7c7267] transition">Ajtók
                        böngészése</a>
                    <a href="/kedvencek"
                        class="px-8 py-3 bg-white text-[#978f88] font-semibold rounded shadow border border-[#978f88] hover:bg-[#f5f3f0] transition">Kedvencek
                        megtekintése</a>
                </div>
            </div>
        </div>

    </section>







    <!-- Termekek carousel -->
    {{-- <x-partials.blog :latestBlogs='$latestBlogs' /> --}}

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
