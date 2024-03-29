@props(['doors' => [], 'tags' => []])
<!-- Elérhető opciók -->
<div class="mx-8">
    <h2 class="mb-3 text-4xl font-bold">{{ __('Available options') }}</h2>
    <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
    <div class="min-h-[30px]"></div>

    <div class="grid grid-cols-2 gap-8 bg-neutral-100 sm:grid-cols-1">
        <div class="doors__col doors__colors bg-neutral-200 p-4">
            <h3 class="doors__subheader mb-6 text-2xl font-bold">
                <strong class="text-4xl text-sarga">1.</strong>{{ __(' Choose the surface colour') }}
            </h3>
            <div class="swiper door-fronts-swiper-thumbs door_colors">
                <div class="swiper-wrapper !grid min-h-[330px] grid-cols-4 items-start lg:grid-cols-3 md:grid-cols-2">
                    @foreach ($tags as $name => $tag)
                        <div class="swiper-slide door_color m-px !h-auto !w-auto p-3">
                            <div class="door_color__wrapper">
                                <div class="door_color__image">
                                    <img src="{{ $tag['tag_img_url'] }}" alt="White" loading="lazy" loading='lazy'>
                                </div>
                                <div class="door_color__meta mt-3">
                                    <h4> {{ __($name) }}</h4>
                                    <p class="text-sm font-bold">{{ __($tag['tag_category']) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="doors__col doors__fronts p-8" id="doors__fronts">
            <h3 class="doors__subheader mb-6 text-2xl font-bold">
                <strong class="text-4xl text-sarga">2.</strong> Ellenőrizze a modellt
            </h3>
            <div class="door_fronts">
                <div class="swiper door-fronts-swiper w-full">
                    <div class="swiper-wrapper items-center">
                        @foreach ($doors as $collection)
                            <div class="swiper-slide !grid grid-cols-3 gap-6 md:grid-cols-2">
                                @foreach ($collection as $item)
                                    <div class="relative grid">
                                        <img class="max-h-[500px]" src="{{ $item->img_url }}" alt=""
                                            loading="lazy">
                                        <a class="group absolute inset-0 flex items-center justify-center bg-black bg-opacity-5 transition duration-300 hover:bg-opacity-40"
                                            href="#">
                                            <div class="text-lg font-bold text-white opacity-0 group-hover:opacity-100">
                                                <x-svg.plus-icon></x-svg.plus-icon>
                                            </div>
                                        </a>
                                        <h4 class="mt-3">{{ __($item->name) }}</h4>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
