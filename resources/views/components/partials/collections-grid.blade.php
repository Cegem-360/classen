    <div class="kollekcio-grid grid">
        <div class="h-1/2 w-3/4 bg-szurke md:h-auto md:w-auto" id="bgr">
        </div>
        <div class="px-6 py-12 text-white" id="text">
            <h3 class="mb-8 max-w-lg text-2xl font-bold">Inspirálódjon kollekcióinkból</h3>
            <p class="mb-6 max-w-lg text-lg">Tervezőink a legújabb lakberendezési trendek szerint alkotják meg az ajtó
                kollekciókat, hogy azok ízlésesen illeszkedjenek számos enteriőrbe.</p>
            <a href="{{ route('category.index') }}" wire:navigate>
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
            </a>
        </div>
        <div class="bg-cover md:col-span-3" id="img1"
            style="background-position: 50% 50%; background-image: url('http://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen_Venis_drzwi_przesuwne.jpg');">
        </div>
        <div class="bg-auto md:hidden" id="img2"
            style="background-position: 20% 100%; background-image: url('http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/classen_china.webp');">
        </div>
        <div class="bg-cover md:hidden" id="img3"
            style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/classen_modul.webp') }}'); transform: scaleX(-1);">
        </div>
    </div>
