    <div class="kollekcio-grid grid">
        <div id="bgr" class="w-3/4 md:w-auto h-1/2 md:h-auto bg-szurke"></div>
        <div id="text" class="px-6 py-12 text-white">
            <h3 class="max-w-lg mb-8 text-2xl font-bold">Inspirálódjon kollekcióinkból</h3>
            <p class="mb-6 max-w-lg text-lg">Tervezőink a legújabb lakberendezési trendek szerint alkotják meg az ajtó kollekciókat, hogy azok ízlésesen illeszkedjenek számos enteriőrbe.</p>
            <button class="mt-2 px-6 py-2 w-1/2 flex items-center justify-between bg-white text-smaragd font-bold">
                <span>Kollekciók</span>
                <svg class="inline" width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <rect id="Artboard1" x="0" y="0" width="96" height="96" style="fill:none;" />
                    <g id="Artboard11" serif:id="Artboard1">
                        <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                            <path d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" style="fill:rgb(var(--color-smaragd)); fill-rule:nonzero;" />
                        </g>
                    </g>
                </svg>
            </button>
        </div>
        <div id="img1" class="bg-cover md:col-span-3" style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/milk_classen.webp') }}');"></div>
        <div id="img2" class="bg-auto md:hidden" style="background-position: 20% 100%; background-image: url('{{ Vite::asset('resources/img/classen_china.webp') }}');"></div>
        <div id="img3" class="bg-cover md:hidden" style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/classen_modul.webp') }}'); transform: scaleX(-1);"></div>
    </div>
