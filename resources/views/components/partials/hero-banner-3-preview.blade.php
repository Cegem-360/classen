{{-- 
<div
    class="mx-auto flex h-1/2 flex-wrap items-center grid-cols-[1fr_3fr] sm:grid-cols-1 bg-gradient-to-b from-[#978f88] to-[#c4c0bd] text-white">
    <div class="relative h-[80vh] sm:h-fit">
        <!-- Slide 1: Az ajtótokok felületkezeltek -->
        <div id="slide-1" class="py-24 hero-wrapper sm:py-6">
            <div class="hero-content">
                <h2 class="px-6 mb-4 text-5xl font-bold hero-title">Az ajtótokok felületkezeltek</h2>
                <hr class="relative h-1 mb-6 ml-6 border-0 hero-line w-96 bg-sarga">
                <h3 class="px-6 text-lg font-bold hero-text">Minden ajtótokunkat modern technológiával, tartós
                    felületkezeléssel látjuk el, hogy hosszú távon megőrizze szépségét és ellenállóságát.</h3>
                <a class="hero-cta group mt-8 flex w-full items-center justify-between bg-[#434B5855] px-6 py-2 text-lg font-bold text-white"
                    href="/ajtok" wire:navigate>
                    <span>Ajtók megtekintése</span>
                    <x-svg.hero-btn-arrow />
                </a>
            </div>
        </div>
        <!-- Slide 2: Elkészült az új katalógus -->
        <div id="slide-2" class="py-24 hero-wrapper sm:py-6">
            <div class="hero-content">
                <h2 class="px-6 mb-4 text-5xl font-bold hero-title">Elkészült az új katalógus</h2>
                <hr class="relative h-1 mb-6 ml-6 border-0 hero-line w-96 bg-sarga">
                <h3 class="px-6 text-lg font-bold hero-text">Fedezze fel legújabb termékeinket és inspirálódjon az új
                    katalógusunkból! Letölthető vagy megtekinthető online.</h3>
                <a class="hero-cta group mt-8 flex w-full items-center justify-between bg-[#434B5855] px-6 py-2 text-lg font-bold text-white"
                    href="/letoltesek" wire:navigate>
                    <span>Katalógus letöltése</span>
                    <x-svg.hero-btn-arrow />
                </a>
            </div>
        </div>
        <!-- Slide 3: Raktárról -->
        <div id="slide-3" class="py-24 hero-wrapper sm:py-6">
            <div class="hero-content">
                <h2 class="px-6 mb-4 text-5xl font-bold hero-title">Raktárról azonnal elérhető ajtók</h2>
                <hr class="relative h-1 mb-6 ml-6 border-0 hero-line w-96 bg-sarga">
                <h3 class="px-6 text-lg font-bold hero-text">Válogasson raktáron lévő ajtóink közül, gyors szállítással
                    és kedvező árakkal!</h3>
                <a class="hero-cta group mt-8 flex w-full items-center justify-between bg-[#434B5855] px-6 py-2 text-lg font-bold text-white"
                    href="/ajtok" wire:navigate>
                    <span>Raktárról elérhető ajtók</span>
                    <x-svg.hero-btn-arrow />
                </a>
            </div>
        </div>
        <div class="absolute z-10 block hero-nav bottom-16 sm:hidden">
            <div class="flex items-center justify-around gap-16 px-6 py-2 mx-auto text-white w-fit">
                <div class="p-4 bg-white rounded-full cursor-pointer hero-swiper-button-prev"><x-svg.hero-nav-prev />
                </div>
                <div class="swiper-pagination hero-swiper-pagination"></div>
                <div class="p-4 bg-white rounded-full cursor-pointer hero-swiper-button-next"><x-svg.hero-nav-next />
                </div>
            </div>
        </div>
    </div>
</div>
 --}}










@php
    $heroBannerItems = [
        [
            'title' => 'Az ajtótokok felületkezeltek',
            'text' =>
                'Minden ajtótokunkat modern technológiával, tartós felületkezeléssel látjuk el, hogy hosszú távon megőrizze szépségét és ellenállóságát.',
            'img_url' => Vite::asset('resources/img/allithato-ajtokeret.webp'),
            'link_title' => 'Ajtók megtekintése',
            'page' => 'ajtok',
        ],
        [
            'title' => 'Elkészült az új katalógus',
            'text' =>
                'Fedezze fel legújabb termékeinket és inspirálódjon az új katalógusunkból! Letölthető vagy megtekinthető online.',
            'img_url' => Vite::asset('resources/img/EN_slider_katalog-drzwi-2025_desktop.jpg'),
            'link_title' => 'Katalógus letöltése',
            'page' => 'letoltesek',
        ],
        [
            'title' => 'Raktárról azonnal elérhető ajtók',
            'text' => 'Válogasson raktáron lévő ajtóink közül, gyors szállítással és kedvező árakkal!',
            'img_url' => Vite::asset('resources/img/IMG_7478.webp'),
            'link_title' => 'Raktárról elérhető ajtók',
            'page' => 'ajtok',
        ],
    ];
@endphp
<div
    class="mx-auto flex h-1/2 flex-wrap items-center !grid grid-cols-[1fr_3fr] sm:grid-cols-1 bg-gradient-to-b from-[#978f88] to-[#c4c0bd] text-white">

    <div class="relative h-[80vh] sm:h-fit">
        @foreach ($heroBannerItems as $index => $item)
            <div id="slide-{{ $index }}" class="py-24 hero-wrapper sm:py-6">
                <div class="hero-content">
                    <h2 class="px-6 mb-4 text-5xl font-bold hero-title">{{ $item['title'] }}</h2>
                    <hr class="relative h-1 mb-6 ml-6 border-0 hero-line w-96 bg-sarga">
                    <h3 class="px-6 text-lg font-bold hero-text">{!! $item['text'] !!}</h3>
                    <a class="hero-cta group mt-8 flex w-full items-center justify-between bg-[#434B5855] px-6 py-2 text-lg font-bold text-white"
                        href="{{ route('category.show', ['category' => $item['page']]) }}" wire:navigate>
                        <span>{{ $item['link_title'] }}</span>
                        <x-svg.hero-btn-arrow />
                    </a>
                </div>
            </div>
        @endforeach
        <div class="absolute z-10 block hero-nav bottom-16 sm:hidden">
            <div class="flex items-center justify-around gap-16 px-6 py-2 mx-auto text-white w-fit">
                <div class="p-4 bg-white rounded-full cursor-pointer hero-swiper-button-prev"><x-svg.hero-nav-prev />
                </div>
                <div class="swiper-pagination hero-swiper-pagination"></div>
                <div class="p-4 bg-white rounded-full cursor-pointer hero-swiper-button-next"><x-svg.hero-nav-next />
                </div>
            </div>
        </div>
    </div>

    <div class="swiper hero-swiper relative h-[80vh] w-full sm:h-fit">
        <div class="swiper-wrapper">
            @foreach ($heroBannerItems as $item)
                <div class="swiper-slide">
                    <div class="hero-image sm:h-[70vw] h-[80vh] bg-cover bg-center sm:h-[100vh]"
                        style="background-position: 40% 50%; background-image: url('{{ $item['img_url'] }}');"></div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function animationSlide(slideItem) {
            const tl = gsap.timeline({
                id: "time",
                onStart: function() {}
            });

            const contentWrapper = document.querySelector(".hero-content");
            const heroLine = document.querySelector(".hero-line");
            const heroTitle = document.querySelector(".hero-content .hero-title");
            const heroContent = document.querySelector(".hero-content .hero-text");
            const heroCTA = document.querySelector(".hero-content .hero-cta");

            tl.set([heroTitle, heroContent, heroCTA], {
                    autoAlpha: 0,
                })
                .fromTo(contentWrapper, {
                    x: 10,
                    autoAlpha: 0
                }, {
                    x: 0,
                    autoAlpha: 1,
                    duration: 2,
                    ease: "power2.inOut"
                })
                .fromTo(
                    [heroTitle, heroContent, heroCTA], {
                        autoAlpha: 0,
                        y: 100
                    }, {
                        autoAlpha: 1,
                        y: 0,
                        duration: 1.2,
                        ease: "power1.out",
                        stagger: 0.25
                    },
                    "-=1.2"
                )
                .fromTo(heroLine, {
                    scaleX: 0
                }, {
                    scaleX: "100%",
                    duration: 1.5,
                    ease: "power1.inOut",
                    transformOrigin: "right"
                }, "-=1.2")

            return tl;
        }
    </script>
</div>
