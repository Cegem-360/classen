@props(['colorVariants' => [], 'modelVariants' => []])
<!-- Color variant -->
<div class="mx-8">
    <h2 class="mb-3 text-4xl font-bold">Színvariációk</h2>
    <hr class="relative w-32 h-1 mt-3 mb-3 border-0 bg-sarga">
    <div class="min-h-[30px]"></div>

    <div class="grid grid-cols-2 gap-8 bg-neutral-100 sm:grid-cols-1">
        <div class="p-8 doors__col doors__fronts" id="doors__fronts">
            <div class="door_fronts">
                <div class="w-full swiper lightbox3 door-color-variant-swiper">
                    <div class="items-center swiper-wrapper">
                        @foreach ($colorVariants as $colorVariant)
                            @foreach ($colorVariant as $variant)
                                <div class="swiper-slide" data-hash="{{ $variant->tag }}">
                                    <div class="flex h-full w-full justify-center bg-[#ffffff00]">
                                        <img class="max-h-[500px]"
                                            src="{{ $variant->img_url ?? Vite::asset('resources/img/placeholder.webp') }}"
                                            alt="" loading="lazy" itemprop="contentUrl" target="_blank">
                                    </div>
                                    {{-- </a> --}}
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 py-16 doors__col doors__colors">
            <div class="door_swatches">
                <div class="min-h-[330px] flex-wrap items-center md:flex-col">
                    @foreach ($colorVariants as $category => $colors)
                        <div class="variant-group">
                            <h3 class="text-2xl font-bold">{{ __($category) }}</h3>
                            <div class="doors_colors__variant-set flex flex-wrap border-b-1 border-[#bfbfbf] py-8">
                                @foreach ($colors as $color)
                                    <div class="mx-4 my-2 door_variant" id='{{ $color->tag }}-color'
                                        onclick="selectColor('{{ $color->tag }}-color')">
                                        <a class="block w-[94px]" href="#{{ $color->tag }}">
                                            <img class="h-[88px] w-[88px] rounded-full"
                                                src="{{ $color->tag_img_url ?? Vite::asset('resources/img/placeholder.webp') }}"
                                                loading="lazy">
                                            <div class="door_variant__meta">
                                                <h4 class="mt-2 text-sm text-center">{{ __($color->tag_name) }}</h4>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        function selectColor(obj) {
            var target = document.getElementById(obj);
            $('.door_variant.active').removeClass('active');
            target.classList.add('active');
        }
    </script>
</div>
