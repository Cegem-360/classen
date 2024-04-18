<x-layouts.app>
    <x-nav.breadcrumb>
        {{ __('Favorites') }}
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="mx-16 md:mx-8 sm:mx-4">
        <div class="mb-16">
            <h2 class="mb-3 text-4xl font-bold">{{ __('Favorites') }}</h2>
            <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
        </div>
        <div class="max-w-7xl">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">{{ __('Kiválasztott kedvencek') }}</h3>

            <div class="mt-6 grid grid-cols-6 gap-x-6 gap-y-10 md:grid-cols-4 sm:grid-cols-2">
                @foreach ($products as $product)
                    <div class="group relative">
                        <div class="absolute right-0 top-0 z-50">
                            <button class="favorite"
                                onclick="initFavoritesJS.toggleFavoriteItem('{{ $product['id'] }}')">
                                <x-svg.heart class="fill-white" id="heart-{{ $product['id'] }}"> </x-svg.heart>
                            </button>
                        </div>
                        <a href="{{ route('door.show', ['door' => $product['id']]) }}" wire:navigate>
                            <div
                                class="sm:aspect-none aspect-[7/16] overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
                                <img class="h-full w-full object-cover object-center"
                                    src=" {{ !empty($product['img_url']) ? $product['img_url'] : Vite::asset('resources/img/placeholder.webp') }}">
                            </div>
                        </a>

                        <div class="my-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a class="flex flex-col" href="{{ route('door.show', ['door' => $product['id']]) }}"
                                        wire:navigate>
                                        <span class="inset-0" aria-hidden="true"></span>
                                        {{ $product['category']['name'] }}
                                        <span class="inset-0" aria-hidden="true"></span>
                                        <b>{{ __($product['tag_name']) }}</b>
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-700">{{ $product['name'] }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">
                                <x-collections.partials.price>{{ $product['price'] }}</x-collections.partials.price>
                            </p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-footer.layout></x-footer.layout>

</x-layouts.app>
