@props(['products' => ''])
<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($products as $product)
                <div class="group relative">
                    <div
                        class="aspect-h-1 aspect-w-1 lg:aspect-none w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-80">

                        <img class="h-full w-full object-cover object-center lg:h-full lg:w-full"
                            src=" {{ !empty($product['img_url']) ? $product['img_url'] : Vite::asset('resources/img/placeholder.webp') }}"
                            alt="Front of men&#039;s Basic Tee in black." loading='lazy'>
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
                                <button class="favorite" onclick="toggleFavoriteItem('{{ $product['id'] }}')">
                                    <svg class="h-6 w-6 fill-white" id='heart-{{ $product['id'] }}'
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
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
