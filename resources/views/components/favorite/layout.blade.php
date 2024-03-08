@props(['products' => ''])
<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 lg:max-w-7xl lg:px-8 sm:px-6 sm:py-24">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 xl:gap-x-8 lg:grid-cols-4 sm:grid-cols-2">
            @foreach ($products as $product)
                <div class="group relative">
                    <div
                        class="aspect-h-1 aspect-w-1 lg:aspect-none w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-80">

                        <img class="h-full w-full object-cover object-center lg:h-full lg:w-full"
                            src=" {{ !empty($product['img_url']) ? $product['img_url'] : Vite::asset('resources/img/placeholder.webp') }}"
                            alt="Front of men&#039;s Basic Tee in black." loading="lazy" loading='lazy'>
                    </div>
                    <div class="mt-4 flex flex-wrap justify-between">
                        <div class="basis-2/3">
                            <h3 class="text-sm text-gray-700">
                                <a class="text-lg font-bold" href="{{ route('door.show', ['door' => $product['id']]) }}"
                                    wire:navigate>
                                    {{ $product['category']['name'] }} - {{ $product['name'] }}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500"></p>
                        </div>
                        <div class="basis-1/3">
                            <p class="text-sm font-medium text-gray-900">
                                <button class="favorite"
                                    onclick="initFavoritesJS.toggleFavoriteItem('{{ $product['id'] }}')">
                                    <x-svg.heart class="" id="heart-{{ $product['id'] }}"> </x-svg.heart>
                                </button>
                            </p>
                        </div>

                    </div>
                </div>
            @endforeach
            <!-- More products... -->
        </div>
    </div>
</div>
