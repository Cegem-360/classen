@use('App\Models\WebsiteOptions')
<div class="mx-auto flex h-1/2 flex-wrap items-center bg-gradient-to-b from-[#978f88] to-[#c4c0bd] text-white">
    <!-- Hero Text -->
    <div class="hero-wrapper w-1/4 py-12 sm:w-full">
        <div class="hero-content">

            <h2 class="hero-title mb-4 px-6 text-5xl font-bold">Stílusos tolóajtók</h2>
            <hr class="hero-line relative mb-6 ml-6 h-1 w-96 border-0 bg-sarga">
            <h3 class="hero-text px-6 text-lg font-bold">Klasszikus megjelenés, ezerarcú felhasználás.</h3>
            <button
                class="hero-cta mt-8 flex w-full items-center justify-between bg-[#434B5855] px-6 py-2 text-lg font-bold text-white">
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
        </div>
        <div class="hero-nav">
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
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Image -->
    <div class="swiper hero-swiper h-[80vh] w-3/4 sm:w-full">
        <div class="swiper-wrapper">
            @foreach (WebsiteOptions::where('name', 'fooldal_hero_banner_kepek')->where('key', 'kep')->get() as $item->value)
                <div class="swiper-slide h-[80vh] w-3/4 bg-cover bg-center sm:w-full"
                    style="background-position: 40% 50%; background-image: url('{{ $item }}');">
                </div>
            @endforeach

        </div>
    </div>
</div>
