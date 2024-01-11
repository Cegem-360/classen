<x-layouts.app>

    <div class="mx-auto flex h-1/2 flex-wrap items-center bg-gradient-to-b from-[#978f88] to-[#c4c0bd] text-white">
        <!-- Hero Text -->
        <div class="w-1/4 py-12 sm:w-full">
            <h2 class="mb-4 px-6 text-5xl font-bold">Stílusos tolóajtók</h2>
            <hr class="relative mb-6 ml-6 h-1 w-96 border-0 bg-sarga">
            <h3 class="px-6 text-lg font-bold">Klasszikus megjelenés, ezerarcú felhasználás.</h3>
            <button
                class="mt-8 flex w-full items-center justify-between bg-[#434B5855] px-6 py-2 text-lg font-bold text-white">
                <span>TOLÓAJTÓK</span>
                <svg class="inline" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                    width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/">
                    <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path style="fill:white;fill-rule:nonzero;"
                                d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                        </g>
                    </g>
                </svg>
            </button>
            <div class="mx-auto mt-24 flex w-fit items-center justify-around gap-6 px-6 py-2 text-white">
                <div class="hero-swiper-button-prev cursor-pointer rounded-full bg-white p-4"><svg class="inline"
                        style="transform: scaleX(-1);"
                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                        width="24" height="24" viewBox="0 0 96 96" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xml:space="preserve" xmlns:serif="http://www.serif.com/">
                        <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                        <g id="Artboard11" serif:id="Artboard1">
                            <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                                <path style="fill:rgb(var(--color-sarga));fill-rule:nonzero;"
                                    d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                            </g>
                        </g>
                    </svg></div>
                <div class="swiper-pagination hero-swiper-pagination"></div>
                <div class="hero-swiper-button-next cursor-pointer rounded-full bg-white p-4"><svg class="inline"
                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                        width="24" height="24" viewBox="0 0 96 96" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xml:space="preserve" xmlns:serif="http://www.serif.com/">
                        <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                        <g id="Artboard11" serif:id="Artboard1">
                            <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                                <path style="fill:rgb(var(--color-sarga));fill-rule:nonzero;"
                                    d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                            </g>
                        </g>
                    </svg></div>
            </div>
        </div>
        <!-- Hero Image -->
        <div class="swiper hero-swiper h-[80vh] w-3/4 sm:w-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-[80vh] w-3/4 bg-cover bg-center sm:w-full"
                    style="background-position: 40% 50%; background-image: url('{{ Vite::asset('resources/img/drzwi-przesuwne2-1920x768.webp') }}');">
                </div>
                <div class="swiper-slide h-[80vh] w-3/4 bg-cover bg-center sm:w-full"
                    style="background-position: 40% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');">
                </div>
                <div class="swiper-slide h-[80vh] w-3/4 bg-cover bg-center sm:w-full"
                    style="background-position: 40% 30%; background-image: url('{{ Vite::asset('resources/img/classen_modul.webp') }}');">
                </div>
            </div>
        </div>
    </div>

    <!-- Ajto tipusok -->
    <div class="text-white">
        <div class="relative z-10 -mt-8 flex w-3/4 bg-szurke py-6 md:w-full md:flex-wrap">
            <div class="mr-6 w-1/4 border-r-1 px-6 py-2 md:mr-0 md:w-1/2 md:px-12">
                <img src="{{ Vite::asset('resources/img/icons/1-belteri-ajtok.svg') }}" alt="belteri-ajtok">
                <h3 class="mt-4">Beltéri ajtók</h3>
            </div>
            <div class="mr-6 w-1/4 border-r-1 px-6 py-2 md:mr-0 md:w-1/2 md:border-r-0 md:px-12">
                <img src="{{ Vite::asset('resources/img/icons/2-bejarati-ajtok.svg') }}" alt="belteri-ajtok">
                <h3 class="mt-4">Enteriőrbe illő <br>bejárati ajtók</h3>
            </div>
            <div class="mr-6 w-1/4 border-r-1 px-6 py-2 md:mr-0 md:w-1/2 md:px-12">
                <img src="{{ Vite::asset('resources/img/icons/3-muszaki-ajtok.svg') }}" alt="belteri-ajtok">
                <h3 class="mt-4">Műszaki ajtók</h3>
            </div>
            <div class="w-1/4 px-6 py-2 md:w-1/2 md:px-12">
                <img src="{{ Vite::asset('resources/img/icons/4-toloajtok.svg') }}" alt="belteri-ajtok">
                <h3 class="mt-4">Tolóajtók</h3>
            </div>
        </div>
    </div>

    <!-- Elonyok -->
    <div class="container mx-auto mb-8 flex flex-wrap p-8 text-center">
        <!-- 1 -->
        <div class="w-1/3 p-8 sm:w-full">
            <img class="mx-auto w-3/4" src="{{ Vite::asset('resources/img/icons/elonyok-1.svg') }}"
                alt="ajtók évtizedekre">
            <h2 class="mb-6 text-xl font-bold">AJTÓK ÉVTIZEDEKRE</h2>
            <p>Időtálló fa és műanyag beltéri ajtókat forgalmazunk, amelyek magas minőséget és esztétikai élményt
                nyújtanak.</p>
        </div>
        <!-- 2 -->
        <div class="w-1/3 p-8 sm:w-full">
            <img class="mx-auto w-3/4" src="{{ Vite::asset('resources/img/icons/elonyok-2.svg') }}"
                alt="ajtók évtizedekre">
            <h2 class="mb-6 text-xl font-bold">ELEGÁNS MEGJELENÉS</h2>
            <p>A beltéri ajtók kimunkálása, megjelenése tökéletesen beleilleszthető a modern és a klasszikus enteriőrbe
                egyaránt.</p>
        </div>
        <!-- 3 -->
        <div class="w-1/3 p-8 sm:w-full">
            <img class="mx-auto w-3/4" src="{{ Vite::asset('resources/img/icons/elonyok-3.svg') }}"
                alt="ajtók évtizedekre">
            <h2 class="mb-6 text-xl font-bold">GYÖNYÖRŰ TÓNUSOK</h2>
            <p>Ajtóink számos kellemes árnyalatban elérhetők, így garantáltan megtalálja az otthonába, irodájába illő
                modellt.</p>
        </div>
    </div>

    <div class="mx-auto flex h-1/2 flex-wrap items-center justify-end bg-cover text-white"
        style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/classen_verti.webp') }}');">
        <div class="-mt-12 mb-12 h-[50vh] w-1/2 bg-zold_attetszo px-16 py-24 sm:w-full">
            <h3 class="mb-8 max-w-lg text-2xl font-bold">Fa mintázatú beltéri ajtók, a természetesség nevében</h3>
            <p class="max-w-lg text-lg">Élvezze a modern ajtók adta lehetőségeket, teremtse meg álmai otthonát
                megkötések és kompromisszumok nélkül.</p>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Termekek -->
    <div class="mx-auto flex">
        <!-- Nav PREV -->
        <div class="flex w-fit items-center justify-around">
            <div class="prd-swiper-button-prev cursor-pointer rounded-full bg-white p-4"><svg class="inline"
                    style="transform: scaleX(-1);"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                    width="24" height="24" viewBox="0 0 96 96" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xml:space="preserve" xmlns:serif="http://www.serif.com/">
                    <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path style="fill:rgb(var(--color-szurke));fill-rule:nonzero;"
                                d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                        </g>
                    </g>
                </svg></div>
        </div>

        <div class="swiper prd-swiper h-[50vh] w-3/4 sm:w-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-cover bg-center"
                    style="background-position: 40% 50%; background-image: url('{{ Vite::asset('resources/img/drzwi-przesuwne2-1920x768.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center"
                    style="background-position: 40% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center"
                    style="background-position: 40% 30%; background-image: url('{{ Vite::asset('resources/img/classen_modul.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center"
                    style="background-position: 40% 50%; background-image: url('{{ Vite::asset('resources/img/drzwi-przesuwne2-1920x768.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center"
                    style="background-position: 40% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center"
                    style="background-position: 40% 30%; background-image: url('{{ Vite::asset('resources/img/classen_modul.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center"
                    style="background-position: 40% 50%; background-image: url('{{ Vite::asset('resources/img/drzwi-przesuwne2-1920x768.webp') }}');">
                </div>
                <div class="swiper-slide bg-cover bg-center"
                    style="background-position: 40% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');">
                </div>
            </div>
            <div class="swiper-pagination prd-swiper-pagination"></div>
        </div>

        <!-- Nav NEXT -->
        <div class="flex w-fit items-center justify-around">
            <div class="prd-swiper-button-next cursor-pointer rounded-full bg-white p-4"><svg class="inline"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                    width="24" height="24" viewBox="0 0 96 96" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xml:space="preserve" xmlns:serif="http://www.serif.com/">
                    <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path style="fill:rgb(var(--color-szurke));fill-rule:nonzero;"
                                d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                        </g>
                    </g>
                </svg></div>
        </div>

    </div>

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Kollekciok -->
    <div class="kollekcio-grid grid">
        <div class="h-1/2 w-3/4 bg-szurke md:h-auto md:w-auto" id="bgr"></div>
        <div class="px-6 py-12 text-white" id="text">
            <h3 class="mb-8 max-w-lg text-2xl font-bold">Inspirálódjon kollekcióinkból</h3>
            <p class="mb-6 max-w-lg text-lg">Tervezőink a legújabb lakberendezési trendek szerint alkotják meg az ajtó
                kollekciókat, hogy azok ízlésesen illeszkedjenek számos enteriőrbe.</p>
            <button class="mt-2 flex w-1/2 items-center justify-between bg-white px-6 py-2 font-bold text-smaragd">
                <span>Kollekciók</span>
                <svg class="inline"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                    width="24" height="24" viewBox="0 0 96 96" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xml:space="preserve" xmlns:serif="http://www.serif.com/">
                    <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path style="fill:rgb(var(--color-smaragd)); fill-rule:nonzero;"
                                d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                        </g>
                    </g>
                </svg>
            </button>
        </div>
        <div class="bg-cover md:col-span-3" id="img1"
            style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/milk_classen.webp') }}');">
        </div>
        <div class="bg-auto md:hidden" id="img2"
            style="background-position: 20% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');">
        </div>
        <div class="bg-cover md:hidden" id="img3"
            style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/classen_modul.webp') }}'); transform: scaleX(-1);">
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Szakértő segítség -->
    <div class="mx-auto flex h-1/2 flex-wrap items-center justify-end bg-cover text-white"
        style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/Classen-drzwi-Ferro-dab-nordycki.webp') }}');">
        <div class="-mt-12 mb-12 h-[50vh] w-1/2 bg-zold_attetszo px-16 py-24 sm:w-full">
            <h3 class="mb-8 max-w-lg text-2xl font-bold">Szakértő segítség a teljes munkafolyamat során</h3>
            <p class="max-w-lg text-lg">Szakembereink naprakész segítséget nyújtanak a megfelelő ajtó kiválasztásától a
                komplett kivitelezésig.</p>
            <button
                class="mt-2 flex w-full items-center justify-between bg-zold_attetszo px-6 py-2 font-bold text-white">
                <span>SZAKTANÁCSADÁS</span>
                <svg class="inline"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                    width="24" height="24" viewBox="0 0 96 96" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xml:space="preserve" xmlns:serif="http://www.serif.com/">
                    <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path style="fill:white;fill-rule:nonzero;"
                                d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                        </g>
                    </g>
                </svg>
            </button>
            <button
                class="mt-1 flex w-full items-center justify-between bg-zold_attetszo px-6 py-2 font-bold text-white">
                <span>HELYSZÍNI FELMÉRÉS</span>
                <svg class="inline"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                    width="24" height="24" viewBox="0 0 96 96" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xml:space="preserve" xmlns:serif="http://www.serif.com/">
                    <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path style="fill:white;fill-rule:nonzero;"
                                d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                        </g>
                    </g>
                </svg>
            </button>
            <button
                class="mt-1 flex w-full items-center justify-between bg-zold_attetszo px-6 py-2 font-bold text-white">
                <span>SZAKSZERŰ BEÉPÍTÉS</span>
                <svg class="inline"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                    width="24" height="24" viewBox="0 0 96 96" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xml:space="preserve" xmlns:serif="http://www.serif.com/">
                    <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path style="fill:white;fill-rule:nonzero;"
                                d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </div>

    <x-footer.layout />

    <!-- Hero Section -->
    <div class="hidden bg-blue-500 py-16 text-white">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Your Hero Title</h1>
            <p class="mt-4 text-lg">A brief description of your hero section.</p>
            <button class="mt-8 rounded-full bg-white px-4 py-2 text-blue-500">Get Started</button>
        </div>
    </div>

</x-layouts.app>
