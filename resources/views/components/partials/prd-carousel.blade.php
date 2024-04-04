@props(['categories' => []])

<div class="mx-auto flex">
    <!-- Nav PREV -->
    <div class="flex w-fit items-center justify-around">
        <div class="prd-swiper-button-prev cursor-pointer rounded-full bg-white p-4"><svg class="inline"
                style="transform: scaleX(-1);"
                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" width="24"
                height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/">
                <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                <g id="Artboard11" serif:id="Artboard1">
                    <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                        <path style="fill:rgb(var(--color-szurke));fill-rule:nonzero;"
                            d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                    </g>
                </g>
            </svg>
        </div>
    </div>

    <div class="swiper prd-swiper h-[50vh] w-3/4 sm:w-full">
        <div class="swiper-wrapper">
            @foreach ($categories as $category)
                <div class="swiper-slide bg-cover bg-center"
                    style="background-position: 40% 50%; background-image: url('{{ $category->img_url }}');">
                    <a class="absolute inset-0 z-50 flex items-center justify-center bg-[#00000033]"
                        href="{{ route('category.show', ['category' => $category->name]) }}" wire:navigate>
                        <h3 class="text-2xl font-bold text-white drop-shadow-md">{{ $category->name }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination prd-swiper-pagination"></div>
    </div>
    <!-- Nav NEXT -->
    <div class="flex w-fit items-center justify-around">
        <div class="prd-swiper-button-next cursor-pointer rounded-full bg-white p-4">
            <svg class="inline" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                width="24" height="24" viewBox="0 0 96 96" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/">
                <rect id="Artboard1" style="fill:none;" x="0" y="0" width="96" height="96" />
                <g id="Artboard11" serif:id="Artboard1">
                    <g transform="matrix(-1.01053,0,0,1.01053,98.5263,-2.52632)">
                        <path style="fill:rgb(var(--color-szurke));fill-rule:nonzero;"
                            d="M40.6,88.1L50.2,78.4L28.6,56.8L97.5,56.8L97.5,43.2L28.6,43.2L50.2,21.6L40.6,11.9L2.5,50L40.6,88.1Z" />
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:navigated', () => {
            var swiper = new Swiper('.prd-swiper', {
                slidesPerView: 1,
                autoplay: {
                    delay: 2500,
                }
                spaceBetween: 30,
                allowTouchMove: false,
                touchStartPreventDefault: false,
                loop: true,
                pagination: {
                    el: '.prd-swiper-pagination',
                    clickable: true,
                },
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
        });
    </script>
</div>
