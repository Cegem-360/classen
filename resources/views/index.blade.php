<x-layouts.app>
    {{--  @dd($categories) --}}
    <x-partials.hero-banner />

    <!-- Ajto tipusok -->
    <x-partials.door-categories />

    <!-- Elonyok -->
    <x-partials.elonyok />

    <div class="ad-banner mx-auto flex h-1/2 flex-wrap items-center justify-end bg-cover text-white"
        style="background-position: 50% 50%; background-image: url('{{ Vite::asset('resources/img/classen_verti.webp') }}');">
        <div class="banner-container -mt-12 mb-12 h-[50vh] w-1/2 bg-zold_attetszo px-16 py-24 sm:w-full">
            <h3 class="mb-8 max-w-lg text-2xl font-bold">Fa mintázatú beltéri ajtók, a természetesség nevében</h3>
            <p class="max-w-lg text-lg">Élvezze a modern ajtók adta lehetőségeket, teremtse meg álmai otthonát megkötések
                és kompromisszumok nélkül.</p>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Termekek carousel -->
    <x-partials.prd-carousel :categories=$categories />

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Kollekciok grid -->
    <x-partials.collections-grid />

    <!-- gap -->
    <div class="min-h-[69px]"></div>

    <!-- Szakértő segítség -->
    <x-partials.expert-help />

    <!-- Footer -->
    <x-footer.layout />
    <script>
        function initializeSwiper() {
            const prdSwiper = new Swiper('.prd-swiper', {
                // configure Swiper to use modules
                //modules: [Swiper.Navigation, Swiper.Pagination, Swiper.Thumbs],
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                slidesPerView: 1,
                spaceBetween: 30,

                // If we need pagination
                pagination: {
                    el: '.prd-swiper-pagination',
                    clickable: true,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.prd-swiper-button-next',
                    prevEl: '.prd-swiper-button-prev',
                },
                breakpoints: {
                    976: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    560: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    380: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                },
            });
        }
        document.addEventListener('livewire:navigated', initializeSwiper);
    </script>
</x-layouts.app>
