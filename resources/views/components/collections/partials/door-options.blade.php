@props(['doors' => [], 'tags' => []])
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
                    @foreach ($tags as $name => $tag)
                        <div class="swiper-slide door_color p-3">
                            <div class="door_color__wrapper">
                                <div class="door_color__image">
                                    <img class="lazy" src="{{ $tag['tag_img_url'] }}" alt="White" loading='lazy'>
                                </div>
                                <div class="door_color__meta mt-3">
                                    <h4> {{ $name }}</h4>
                                    <p class="text-sm font-bold">{{ $tag['tag_category'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_czarny_9005-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_bialy-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
                                href="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                itemprop="contentUrl" target="_blank">
                                <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                    <img src="{{ Vite::asset('resources/img/prd-images/ajtok/Lirgo_szary_7004-150x330.jpg') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-pswp-width="300" data-pswp-height="660"
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
