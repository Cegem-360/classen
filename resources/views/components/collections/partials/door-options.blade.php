@props(['doors' => []])

<!-- Elérhető opciók -->
<div class="mx-8">
    <h2 class="mb-3 text-4xl font-bold">{{ __('Available options') }}</h2>
    <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
    <div class="min-h-[30px]"></div>

    <div class="grid grid-cols-2 gap-8 bg-neutral-100 sm:grid-cols-1">
        <div class="doors__col doors__colors bg-neutral-200 p-4">
            <h3 class="doors__subheader mb-6 text-2xl font-bold">
                <strong class="text-4xl text-sarga">1.</strong> Válassza ki a felület színét
            </h3>
            <div class="swiper door-fronts-swiper-thumbs door_colors">
                <div class="swiper-wrapper min-h-[330px] flex-wrap items-center md:flex-col">
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/iridium-bialy-mat-170x126.jpg') }}"
                                    alt="White">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>White</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/szary-7004-170x126.jpg') }}"
                                    alt="Gray 7004">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>Gray 7004</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/czarny-9005-170x126.jpg') }}"
                                    alt="Black 9005">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>Black 9005</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/iridium-bialy-mat-170x126.jpg') }}"
                                    alt="White">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>White</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/szary-7004-170x126.jpg') }}"
                                    alt="Gray 7004">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>Gray 7004</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/czarny-9005-170x126.jpg') }}"
                                    alt="Black 9005">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>Black 9005</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/iridium-bialy-mat-170x126.jpg') }}"
                                    alt="White">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>White</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/szary-7004-170x126.jpg') }}"
                                    alt="Gray 7004">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>Gray 7004</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/czarny-9005-170x126.jpg') }}"
                                    alt="Black 9005">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>Black 9005</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/iridium-bialy-mat-170x126.jpg') }}"
                                    alt="White">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>White</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/szary-7004-170x126.jpg') }}"
                                    alt="Gray 7004">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>Gray 7004</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide door_color p-3">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img src="{{ Vite::asset('resources/img/prd-images/feluletek/czarny-9005-170x126.jpg') }}"
                                    alt="Black 9005">
                            </div>
                            <div class="door_color__meta mt-3">
                                <h4>Black 9005</h4>
                                <p class="text-sm font-bold">Lacquered</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doors__col doors__fronts p-4" id="doors__fronts">
            <h3 class="doors__subheader mb-6 text-2xl font-bold">
                <strong class="text-4xl text-sarga">2.</strong> Ellenőrizze a modellt
            </h3>
            <div class="door_fronts">
                <div class="swiper lightbox door-fronts-swiper w-full">
                    <div class="swiper-wrapper items-center">
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="1600" data-pswp-height="900"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
