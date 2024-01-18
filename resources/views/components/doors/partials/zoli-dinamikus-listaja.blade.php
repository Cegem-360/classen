@props(['products' => ''])
<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 lg:max-w-7xl lg:px-8 sm:px-6 sm:py-24">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

        <div class="mt-6 grid grid-cols-6 gap-x-6 gap-y-10 xl:gap-x-8 lg:grid-cols-4 sm:grid-cols-2">
            @foreach ($products as $product)
                {{-- This is the first iteration --}}
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
@section('name')
    <div class="container mx-auto px-6">
        <h3 class="text-2xl font-medium text-gray-700">Wrist Watch</h3>
        <span class="mt-3 text-sm text-gray-500">200+ Products</span>
        <div class="mt-6 grid grid-cols-4 gap-6 xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2">
            <div class="mx-auto w-full max-w-sm overflow-hidden rounded-md shadow-md">

                <div class="flex h-56 w-full items-end justify-end bg-cover"
                    style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                    <button
                        class="mx-5 -mb-4 rounded-full bg-blue-600 p-2 text-white hover:bg-blue-500 focus:bg-blue-500 focus:outline-none">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="px-5 py-3">
                    <h3 class="uppercase text-gray-700">Classic watch</h3>
                    <span class="mt-2 text-gray-500">$123</span>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="mt-8 flex rounded-md">
                    <a class="border ml-0 rounded-l border-r-0 border-gray-200 bg-white px-4 py-2 leading-tight text-blue-700 hover:bg-blue-500 hover:text-white"
                        href="#"><span>Previous</a></a>
                    <a class="border border-r-0 border-gray-200 bg-white px-4 py-2 leading-tight text-blue-700 hover:bg-blue-500 hover:text-white"
                        href="#"><span>1</span></a>
                    <a class="border border-r-0 border-gray-200 bg-white px-4 py-2 leading-tight text-blue-700 hover:bg-blue-500 hover:text-white"
                        href="#"><span>2</span></a>
                    <a class="border border-r-0 border-gray-200 bg-white px-4 py-2 leading-tight text-blue-700 hover:bg-blue-500 hover:text-white"
                        href="#"><span>3</span></a>
                    <a class="border rounded-r border-gray-200 bg-white px-4 py-2 leading-tight text-blue-700 hover:bg-blue-500 hover:text-white"
                        href="#"><span>Next</span></a>
                </div>
            </div>
        </div>
    @endsection
