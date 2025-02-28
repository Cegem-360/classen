@use('App\Models\WebsiteOptions')
<div
    class="mx-auto flex h-1/2 flex-wrap items-center grid-cols-[1fr_3fr] sm:grid-cols-1 bg-gradient-to-b from-[#978f88] to-[#c4c0bd] text-white">

    <div class="relative h-[80vh] sm:h-fit">
        <!-- slide-0 -->
        {{-- <div id="slide-0" class="py-24 hero-wrapper sm:py-6">
            <div class="hero-content">
                <h2 class="px-6 mb-4 text-5xl font-bold hero-title">Boldog Karácsonyt kívánunk!</h2>
                <hr class="relative h-1 mb-6 ml-6 border-0 hero-line w-96 bg-sarga">
                <h3 class="px-6 text-lg font-bold hero-text">Köszönjük, hogy idén is velünk tartottak – bízunk benne,
                    hogy jövőre is részesei lehetünk otthona szépítésének.
                    <br><br>🎅 Békés, boldog karácsonyt és sikerekben gazdag új évet kíván az Arcadia 98 csapata!
                </h3>
            </div>
        </div> --}}
        @foreach (WebsiteOptions::where('name', 'fooldal_hero_banner_kepek')->get() as $item)
            <!-- Hero Text -->
            {{-- <div id="slide-{{ $loop->index + 1 }}" class="py-24 hero-wrapper sm:py-6"> --}}
            <div id="slide-{{ $loop->index }}" class="py-24 hero-wrapper sm:py-6">
                <div class="hero-content">
                    <h2 class="px-6 mb-4 text-5xl font-bold hero-title">{{ $item->title }}</h2>
                    <hr class="relative h-1 mb-6 ml-6 border-0 hero-line w-96 bg-sarga">
                    <h3 class="px-6 text-lg font-bold hero-text">{!! $item->text !!}
                    </h3>
                    <a class="hero-cta group mt-8 flex w-full items-center justify-between bg-[#434B5855] px-6 py-2 text-lg font-bold text-white"
                        href="{{ route('category.show', ['category' => $item->page]) }}" wire:navigate>
                        <span>{{ $item->link_title }}</span>
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
            @foreach (WebsiteOptions::where('name', 'fooldal_hero_banner_kepek')->get() as $item)
                <div class="swiper-slide">
                    <!-- Hero Image -->
                    <div class="hero-image sm:h-[70vw] h-[80vh] bg-cover bg-center sm:h-[100vh]"
                        style="background-position: 40% 50%; background-image: url('{{ $item->img_url }}');"></div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function animationSlide(slideItem) {
            const tl = gsap.timeline({
                id: "time",
                // delay: .6,
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
