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



    <footer class="bg-white">
        <div class="mx-auto max-w-7xl max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:flex-col md:justify-between">
              <div class="flex justify-center md:items-start mb-6 md:mb-0">
                  <a href="/" class="flex items-center">
                      <img src="{{ Vite::asset('resources/img/arcadia98-logo.svg') }}" class="h-16 mt-8 mb-8" alt="Arcadia98 Logo" />
                  </a>
              </div>
              <div>
                  <h3 class="mb-8">ARCADIA 98 KFT. <br>1111 BUDAPEST, Minta u. 52./B.</h3>
              </div>
              <div class="grid grid-cols-3 gap-8 sm:gap-6 sm:grid-cols-1">
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Üzletünk nyitva tartása</h2>
                      <ul class="text-gray-500 font-medium">
                          <li class="mb-2">Hétfő 8:00 - 16:00</li>
                          <li class="mb-2">Kedd 8:00 - 16:00</li>
                          <li class="mb-2">Szerda 8:00 - 16:00</li>
                          <li class="mb-2">Csütörtök 8:00 - 16:00</li>
                          <li class="mb-2">Péntek 8:00 - 16:00</li>
                          <li class="mb-2">Szombat 8:00 - 16:00</li>
                          <li class="mb-2">Vasárnap: –</li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Kapcsolat</h2>
                      <ul class="text-gray-500 font-medium">
                          <li class="mb-2">
                            <a href="mailto:hello@arcadia.hu" class="hover:underline">E-mail: hello@arcadia.hu</a>
                          </li>
                            <li class="mb-2">+36 20 123 4567</li>
                            <li class="mb-2">+36 1 123 456</li>
                          </li>
                      </ul>
                      <ul class="text-gray-500 font-medium">
                            <li class="mb-2">
                              <a href="#" class="hover:underline">ASZF</a>
                            </li>
                            <li class="mb-2">
                              <a href="#" class="hover:underline">Impresszum</a>
                            </li>
                            </li>
                        </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Közösségi oldalaink</h2>
                      <div class="flex gap-2">
                          <svg width="5%" height="5%" viewBox="0 0 800 800" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                                <g id="icons" transform="matrix(1,0,0,1,-13160,-289560)">
                                    <g id="Page-1">
                                        <g id="Dribbble-Light-Preview">
                                            <g id="icons1" serif:id="icons">
                                                <path id="facebook---176-" serif:id="facebook-[#176]" d="M13632.9,290360L13632.9,290000L13742.1,290000L13760,289840L13632.9,289840L13632.9,289762C13632.9,289721 13633.9,289680 13691.5,289680L13749.8,289680L13749.8,289566C13749.8,289564 13699.7,289560 13649,289560C13543.2,289560 13476.9,289626 13476.9,289748L13476.9,289840L13360,289840L13360,290000L13476.9,290000L13476.9,290360L13632.9,290360Z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <svg width="5%" height="5%" viewBox="0 0 800 800" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                                <path d="M400,600C510.457,600 600,510.457 600,400C600,289.543 510.457,200 400,200C289.543,200 200,289.543 200,400C200,510.457 289.543,600 400,600ZM400,533.333C473.637,533.333 533.333,473.637 533.333,400C533.333,326.362 473.637,266.667 400,266.667C326.362,266.667 266.667,326.362 266.667,400C266.667,473.637 326.362,533.333 400,533.333Z" style="fill:rgb(15,15,15);"/>
                                <path d="M600,166.667C581.59,166.667 566.667,181.591 566.667,200C566.667,218.409 581.59,233.333 600,233.333C618.41,233.333 633.333,218.409 633.333,200C633.333,181.591 618.41,166.667 600,166.667Z" style="fill:rgb(15,15,15);fill-rule:nonzero;"/>
                                <path d="M55.132,142.535C33.333,185.318 33.333,241.323 33.333,353.333L33.333,446.667C33.333,558.677 33.333,614.683 55.132,657.463C74.307,695.097 104.903,725.693 142.535,744.867C185.318,766.667 241.323,766.667 353.333,766.667L446.667,766.667C558.677,766.667 614.683,766.667 657.463,744.867C695.097,725.693 725.693,695.097 744.867,657.463C766.667,614.683 766.667,558.677 766.667,446.667L766.667,353.333C766.667,241.323 766.667,185.318 744.867,142.535C725.693,104.903 695.097,74.307 657.463,55.132C614.683,33.333 558.677,33.333 446.667,33.333L353.333,33.333C241.323,33.333 185.318,33.333 142.535,55.132C104.903,74.307 74.307,104.903 55.132,142.535ZM446.667,100L353.333,100C296.228,100 257.408,100.052 227.403,102.503C198.175,104.891 183.228,109.22 172.801,114.532C147.713,127.316 127.316,147.713 114.532,172.801C109.22,183.228 104.891,198.175 102.503,227.403C100.052,257.408 100,296.228 100,353.333L100,446.667C100,503.773 100.052,542.59 102.503,572.597C104.891,601.827 109.22,616.773 114.532,627.2C127.316,652.287 147.713,672.683 172.801,685.467C183.228,690.78 198.175,695.11 227.403,697.497C257.408,699.947 296.228,700 353.333,700L446.667,700C503.773,700 542.59,699.947 572.597,697.497C601.827,695.11 616.773,690.78 627.2,685.467C652.287,672.683 672.683,652.287 685.467,627.2C690.78,616.773 695.11,601.827 697.497,572.597C699.947,542.59 700,503.773 700,446.667L700,353.333C700,296.228 699.947,257.408 697.497,227.403C695.11,198.175 690.78,183.228 685.467,172.801C672.683,147.713 652.287,127.316 627.2,114.532C616.773,109.22 601.827,104.891 572.597,102.503C542.59,100.052 503.773,100 446.667,100Z" style="fill:rgb(15,15,15);"/>
                            </svg>
                            <svg width="5%" height="5%" viewBox="0 0 800 800" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                                <path d="M216.667,266.667C244.281,266.667 266.667,244.281 266.667,216.667C266.667,189.052 244.281,166.667 216.667,166.667C189.052,166.667 166.667,189.052 166.667,216.667C166.667,244.281 189.052,266.667 216.667,266.667Z" style="fill:rgb(15,15,15);fill-rule:nonzero;"/>
                                <path d="M166.667,333.333C166.667,314.924 181.591,300 200,300L233.333,300C251.743,300 266.667,314.924 266.667,333.333L266.667,600C266.667,618.41 251.743,633.333 233.333,633.333L200,633.333C181.591,633.333 166.667,618.41 166.667,600L166.667,333.333Z" style="fill:rgb(15,15,15);fill-rule:nonzero;"/>
                                <path d="M366.667,633.333L400,633.333C418.41,633.333 433.333,618.41 433.333,600L433.333,450C433.333,400 533.333,366.667 533.333,433.333L533.333,600.013C533.333,618.423 548.257,633.333 566.667,633.333L600,633.333C618.41,633.333 633.333,618.41 633.333,600L633.333,400C633.333,333.333 583.333,300 516.667,300C450,300 433.333,350 433.333,350L433.333,333.333C433.333,314.924 418.41,300 400,300L366.667,300C348.257,300 333.333,314.924 333.333,333.333L333.333,600C333.333,618.41 348.257,633.333 366.667,633.333Z" style="fill:rgb(15,15,15);fill-rule:nonzero;"/>
                                <path d="M666.667,33.333C721.897,33.333 766.667,78.105 766.667,133.333L766.667,666.667C766.667,721.897 721.897,766.667 666.667,766.667L133.333,766.667C78.105,766.667 33.333,721.897 33.333,666.667L33.333,133.333C33.333,78.105 78.105,33.333 133.333,33.333L666.667,33.333ZM666.667,100C685.077,100 700,114.924 700,133.333L700,666.667C700,685.077 685.077,700 666.667,700L133.333,700C114.924,700 100,685.077 100,666.667L100,133.333C100,114.924 114.924,100 133.333,100L666.667,100Z" style="fill:rgb(15,15,15);"/>
                            </svg>
                            <svg width="5%" height="5%" viewBox="0 0 800 800" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                                <g id="icons" transform="matrix(1,0,0,1,-9760,-291280)">
                                    <g id="Page-1">
                                        <g id="Dribbble-Light-Preview">
                                            <g id="icons1" serif:id="icons">
                                                <path id="youtube---168-" serif:id="youtube-[#168]" d="M10079.5,291783L10079.5,291559C10159.2,291596 10220.9,291633 10293.9,291672C10233.7,291705 10159.2,291743 10079.5,291783M10523.6,291447C10509.9,291429 10486.5,291415 10461.5,291410C10388.2,291397 9930.84,291396 9857.57,291410C9837.56,291414 9819.75,291423 9804.45,291437C9739.99,291497 9760.19,291818 9775.73,291870C9782.26,291893 9790.71,291909 9801.35,291919C9815.05,291934 9833.82,291943 9855.37,291948C9915.74,291960 10226.7,291967 10460.2,291949C10481.8,291946 10500.8,291936 10515.8,291921C10575.4,291861 10571.4,291522 10523.6,291447"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                      </div>
                  </div>
              </div>
          </div>
          <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
          <div class="sm:flex sm:items-center sm:justify-between">
              <span class="text-sm text-gray-500 sm:text-center">© 2023 <a href="#" class="hover:underline">Arcadia98</a>
              </span>
          </div>
        </div>
    </footer>



    <!-- Hero Section -->
    <div class="hidden bg-blue-500 text-white py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Your Hero Title</h1>
            <p class="mt-4 text-lg">A brief description of your hero section.</p>
            <button class="mt-8 bg-white text-blue-500 px-4 py-2 rounded-full">Get Started</button>
        </div>
    </div>

</x-app-layout>
