<x-app-layout>

    <div class="mx-auto h-1/2 flex flex-wrap items-center text-white bg-gradient-to-b from-[#978f88] to-[#c4c0bd]">
        <!-- Hero Text -->
        <div class="py-12 w-1/4 sm:w-full">
            <h2 class="px-6 text-5xl font-bold mb-4">Stílusos tolóajtók</h2>
            <hr class="relative ml-6 mb-6 w-96 h-1 border-0 bg-sarga">
            <h3 class="px-6 text-lg font-bold">Klasszikus megjelenés, ezerarcú felhasználás.</h3>
            <button class="mt-8 px-6 py-2 w-full flex items-center justify-between bg-[#434B5855] text-white text-lg font-bold">
                <span>TOLÓAJTÓK</span>
                <svg class="inline" width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <rect id="Artboard1" x="0" y="0" width="96" height="96" style="fill:none;"/>
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" style="fill:white;fill-rule:nonzero;"/>
                        </g>
                    </g>
                </svg>
            </button>
            <div class="mt-24 mx-auto px-6 py-2 w-fit gap-6 flex items-center justify-around text-white">
                <div class="hero-swiper-button-prev cursor-pointer p-4 bg-white rounded-full"><svg style="transform: scaleX(-1);" class="inline" width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <rect id="Artboard1" x="0" y="0" width="96" height="96" style="fill:none;"/>
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" style="fill:rgb(var(--color-sarga));fill-rule:nonzero;"/>
                        </g>
                    </g>
                </svg></div>
                <div class="swiper-pagination hero-swiper-pagination"></div>
                <div class="hero-swiper-button-next cursor-pointer p-4 bg-white rounded-full"><svg class="inline" width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <rect id="Artboard1" x="0" y="0" width="96" height="96" style="fill:none;"/>
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" style="fill:rgb(var(--color-sarga));fill-rule:nonzero;"/>
                        </g>
                    </g>
                </svg></div>
            </div>
        </div>
        <!-- Hero Image -->
        <div class="swiper hero-swiper w-3/4 sm:w-full h-[80vh]">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-3/4 sm:w-full h-[80vh] bg-cover bg-center" style="background-position: 40% 50%; background-image: url('{{ Vite::asset('resources/img/drzwi-przesuwne2-1920x768.webp') }}');">
                </div>
                <div class="swiper-slide w-3/4 sm:w-full h-[80vh] bg-cover bg-center" style="background-position: 40% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');">
                </div>
                <div class="swiper-slide w-3/4 sm:w-full h-[80vh] bg-cover bg-center" style="background-position: 40% 30%; background-image: url('{{ Vite::asset('resources/img/classen_modul.webp') }}');">
                </div>
            </div>
        </div>
    </div>

    <!-- Ajto tipusok -->
    <div class="text-white">
        <div class="relative flex md:flex-wrap w-3/4 md:w-full -mt-8 py-6 bg-szurke z-10">
            <div class="w-1/4 md:w-1/2 mr-6 md:mr-0 px-6 md:px-12 py-2 border-r-1">
                <img src="{{ Vite::asset('resources/img/icons/1-belteri-ajtok.svg') }}" alt="belteri-ajtok">
                <h3 class="mt-4">Beltéri ajtók</h3>
            </div>
            <div class="w-1/4 md:w-1/2 mr-6 md:mr-0 px-6 md:px-12 py-2 border-r-1 md:border-r-0">
                <img src="{{ Vite::asset('resources/img/icons/2-bejarati-ajtok.svg') }}" alt="belteri-ajtok">
                <h3 class="mt-4">Enteriőrbe illő <br>bejárati ajtók</h3>
            </div>
            <div class="w-1/4 md:w-1/2 mr-6 md:mr-0 px-6 md:px-12 py-2 border-r-1">
                <img src="{{ Vite::asset('resources/img/icons/3-muszaki-ajtok.svg') }}" alt="belteri-ajtok">
                <h3 class="mt-4">Műszaki ajtók</h3>
            </div>
            <div class="w-1/4 md:w-1/2 px-6 md:px-12 py-2">
                <img src="{{ Vite::asset('resources/img/icons/4-toloajtok.svg') }}" alt="belteri-ajtok">
                <h3 class="mt-4">Tolóajtók</h3>
            </div>
        </div>
    </div>

    <!-- Elonyok -->
    <div class="container mx-auto mb-8 p-8 flex flex-wrap text-center">
        <!-- 1 -->
        <div class="w-1/3 sm:w-full p-8">
            <img class="w-3/4 mx-auto" src="{{ Vite::asset('resources/img/icons/elonyok-1.svg') }}" alt="ajtók évtizedekre">
            <h2 class="text-xl font-bold mb-6">AJTÓK ÉVTIZEDEKRE</h2>
            <p>Időtálló fa és műanyag beltéri ajtókat forgalmazunk, amelyek magas minőséget és esztétikai élményt nyújtanak.</p>
        </div>
        <!-- 2 -->
        <div class="w-1/3 sm:w-full p-8">
            <img class="w-3/4 mx-auto" src="{{ Vite::asset('resources/img/icons/elonyok-2.svg') }}" alt="ajtók évtizedekre">
            <h2 class="text-xl font-bold mb-6">ELEGÁNS MEGJELENÉS</h2>
            <p>A beltéri ajtók kimunkálása, megjelenése tökéletesen beleilleszthető a modern és a klasszikus enteriőrbe egyaránt.</p>
        </div>
        <!-- 3 -->
        <div class="w-1/3 sm:w-full p-8">
            <img class="w-3/4 mx-auto" src="{{ Vite::asset('resources/img/icons/elonyok-3.svg') }}" alt="ajtók évtizedekre">
            <h2 class="text-xl font-bold mb-6">GYÖNYÖRŰ TÓNUSOK</h2>
            <p>Ajtóink számos kellemes árnyalatban elérhetők, így garantáltan megtalálja az otthonába, irodájába illő modellt.</p>
        </div>
    </div>

    <div class="mx-auto h-1/2 flex flex-wrap justify-end items-center text-white bg-cover" style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/classen_verti.webp') }}');">
        <div class="w-1/2 sm:w-full h-[50vh] -mt-12 mb-12 px-16 py-24 bg-zold_attetszo">
            <h3 class="max-w-lg mb-8 text-2xl font-bold">Fa mintázatú beltéri ajtók, a természetesség nevében</h3>
            <p class="max-w-lg text-lg">Élvezze a modern ajtók adta lehetőségeket, teremtse meg álmai otthonát megkötések és kompromisszumok nélkül.</p>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Termekek -->
    <div class="mx-auto flex">
        <!-- Nav PREV -->
        <div class="w-fit flex items-center justify-around">
            <div class="prd-swiper-button-prev cursor-pointer p-4 bg-white rounded-full"><svg style="transform: scaleX(-1);" class="inline" width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <rect id="Artboard1" x="0" y="0" width="96" height="96" style="fill:none;"/>
                <g id="Artboard11" serif:id="Artboard1">
                    <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                        <path d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" style="fill:rgb(var(--color-szurke));fill-rule:nonzero;"/>
                    </g>
                </g>
            </svg></div>
        </div>

        <div class="swiper prd-swiper w-3/4 sm:w-full h-[50vh]">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-cover bg-center" style="background-position: 40% 50%; background-image: url('{{ Vite::asset('resources/img/drzwi-przesuwne2-1920x768.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center" style="background-position: 40% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center" style="background-position: 40% 30%; background-image: url('{{ Vite::asset('resources/img/classen_modul.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center" style="background-position: 40% 50%; background-image: url('{{ Vite::asset('resources/img/drzwi-przesuwne2-1920x768.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center" style="background-position: 40% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center" style="background-position: 40% 30%; background-image: url('{{ Vite::asset('resources/img/classen_modul.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center" style="background-position: 40% 50%; background-image: url('{{ Vite::asset('resources/img/drzwi-przesuwne2-1920x768.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center" style="background-position: 40% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');">
                </div>
            </div>
            <div class="swiper-pagination prd-swiper-pagination"></div>
        </div>

        <!-- Nav NEXT -->
        <div class="w-fit flex items-center justify-around">
            <div class="prd-swiper-button-next cursor-pointer p-4 bg-white rounded-full"><svg class="inline" width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <rect id="Artboard1" x="0" y="0" width="96" height="96" style="fill:none;"/>
                <g id="Artboard11" serif:id="Artboard1">
                    <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                        <path d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" style="fill:rgb(var(--color-szurke));fill-rule:nonzero;"/>
                    </g>
                </g>
            </svg></div>
        </div>

    </div>

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Kollekciok -->
    <div class="kollekcio-grid grid">
        <div id="bgr" class="w-3/4 md:w-auto h-1/2 md:h-auto bg-szurke"></div>
        <div id="text" class="px-6 py-12 text-white">
            <h3 class="max-w-lg mb-8 text-2xl font-bold">Inspirálódjon kollekcióinkból</h3>
            <p class="mb-6 max-w-lg text-lg">Tervezőink a legújabb lakberendezési trendek szerint   alkotják meg az ajtó kollekciókat, hogy azok ízlésesen illeszkedjenek számos   enteriőrbe.</p>
            <button class="mt-2 px-6 py-2 w-1/2 flex items-center justify-between bg-white text-smaragd font-bold">
                <span>Kollekciók</span>
                <svg class="inline" width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <rect id="Artboard1" x="0" y="0" width="96" height="96" style="fill:none;"/>
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" style="fill:rgb(var(--color-smaragd)); fill-rule:nonzero;"/>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
        <div id="img1" class="bg-cover md:col-span-3" style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/milk_classen.webp') }}');"></div>
        <div id="img2" class="bg-auto md:hidden" style="background-position: 20% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');"></div>
        <div id="img3" class="bg-cover md:hidden" style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/classen_modul.webp') }}'); transform: scaleX(-1);"></div>
    </div>

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Szakértő segítség -->
    <div class="mx-auto h-1/2 flex flex-wrap justify-end items-center text-white bg-cover" style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/Classen-drzwi-Ferro-dab-nordycki.webp') }}');">
        <div class="w-1/2 sm:w-full h-[50vh] -mt-12 mb-12 px-16 py-24 bg-zold_attetszo">
            <h3 class="max-w-lg mb-8 text-2xl font-bold">Szakértő segítség a teljes munkafolyamat során</h3>
            <p class="max-w-lg text-lg">Szakembereink naprakész segítséget nyújtanak a megfelelő ajtó kiválasztásától a komplett kivitelezésig.</p>
            <button class="mt-2 px-6 py-2 w-full flex items-center justify-between bg-zold_attetszo text-white font-bold">
                <span>SZAKTANÁCSADÁS</span>
                <svg class="inline" width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <rect id="Artboard1" x="0" y="0" width="96" height="96" style="fill:none;"/>
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" style="fill:white;fill-rule:nonzero;"/>
                        </g>
                    </g>
                </svg>
            </button>
            <button class="mt-1 px-6 py-2 w-full flex items-center justify-between bg-zold_attetszo text-white font-bold">
                <span>HELYSZÍNI FELMÉRÉS</span>
                <svg class="inline" width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <rect id="Artboard1" x="0" y="0" width="96" height="96" style="fill:none;"/>
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" style="fill:white;fill-rule:nonzero;"/>
                        </g>
                    </g>
                </svg>
            </button>
            <button class="mt-1 px-6 py-2 w-full flex items-center justify-between bg-zold_attetszo text-white font-bold">
                <span>SZAKSZERŰ BEÉPÍTÉS</span>
                <svg class="inline" width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <rect id="Artboard1" x="0" y="0" width="96" height="96" style="fill:none;"/>
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" style="fill:white;fill-rule:nonzero;"/>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </div>



    <x-footer.layout />


    <!-- Hero Section -->
    <div class="hidden bg-blue-500 text-white py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Your Hero Title</h1>
            <p class="mt-4 text-lg">A brief description of your hero section.</p>
            <button class="mt-8 bg-white text-blue-500 px-4 py-2 rounded-full">Get Started</button>
        </div>
    </div>

</x-app-layout>
