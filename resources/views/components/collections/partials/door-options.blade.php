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
                <div class="swiper-wrapper min-h-[330px] items-start !grid grid-cols-4 lg:grid-cols-3 md:grid-cols-2">
                    @foreach ($tags as $name => $tag)
                    <div class="swiper-slide door_color m-px p-3 !w-auto !h-auto">
                        <div class="door_color__wrapper">
                            <div class="door_color__image">
                                <img loading="lazy" src="{{ $tag['tag_img_url'] }}" alt="White" loading='lazy'>
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
        <div class="doors__col doors__fronts p-8" id="doors__fronts">
            <h3 class="doors__subheader mb-6 text-2xl font-bold">
                <strong class="text-4xl text-sarga">2.</strong> Ellenőrizze a modellt
            </h3>
            <div class="door_fronts">
                <div class="swiper door-fronts-swiper w-full">
                    <div class="swiper-wrapper items-center">
                        @foreach ($doors as $collection)
                        <div class="swiper-slide !grid grid-cols-3 md:grid-cols-2 gap-6">
                            @foreach ($collection as $item)
                                <div class="grid"><img loading="lazy" class="max-h-[500px]" src="{{ $item->img_url }}" alt="">
                                <h4 class="mt-3">{{ $item->name }}</h4></div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
