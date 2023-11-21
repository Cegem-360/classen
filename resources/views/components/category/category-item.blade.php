@props(['category' => '', 'doors' => '', 'catalogs' => [], 'tags' => []])
<div class="bg-white">
    <div class="pt-6">
        <nav aria-label="Breadcrumb">
            <ol class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8" role="list">
                <li>
                    <div class="flex items-center">
                        <a class="mr-2 text-sm font-medium text-gray-900" href="{{ route('doors') }}"
                            wire:navigate.hover>Door</a>
                        <svg class="h-5 w-4 text-gray-300" aria-hidden="true" width="16" height="20"
                            viewBox="0 0 16 20" fill="currentColor">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <a class="mr-2 text-sm font-medium text-gray-900" href="{{ route('category.index') }}"
                            wire:navigate.hover>collections</a>
                        <svg class="h-5 w-4 text-gray-300" aria-hidden="true" width="16" height="20"
                            viewBox="0 0 16 20" fill="currentColor">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>
                <li class="text-sm">
                    <a class="font-medium text-gray-500 hover:text-gray-600" href="#" aria-current="page">
                        {{ $category->name }}
                    </a>
                </li>
            </ol>
        </nav>
        <!-- Image gallery -->
        <div class="mx-auto ml-20 mt-6 hidden w-full flex-auto overflow-hidden rounded-lg lg:flex">
            <div class="basis-2/5">
                <img class="aspect-square w-full object-cover object-center"
                    src="{{ !empty($category->img_url) ? $category->img_url : Vite::asset('resources/img/placeholder.webp') }}"
                    alt="Two each of gray, white, and black shirts laying flat.">
            </div>

            <div class="basis-3/5 pt-0">
                <section name="">

                    <div class="lg:border-r lg:col-span-2 lg:border-gray-200 lg:pr-8">
                        <h1 class="mb-8 pb-11 text-4xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                            {{ $category->name }}</h1>
                    </div>
                </section>
            </div>

        </div>
        <!-- Product info -->
        <div class="mt-9 flex w-full flex-row flex-wrap">
            @foreach ($catalogs as $catalog)
                <x-category.partials.attribute :catalog=$catalog />
            @endforeach
        </div>
    </div>
    <!-- Available options -->
    <section class="mt-16 h-96 pt-16" name="Available options">
        <h1 class="h-12 w-auto text-3xl">
            {{ __('Available options') }}
        </h1>

        <x-row>

            <div class="basis-1/2">
                <section class="bg-gray-200" name=="Choose finishing">
                    <h1 class="h-12 w-auto text-3xl">
                        1. Choose finishing
                    </h1>

                    <x-row>
                        @foreach ($tags as $key => $value)
                            <button onclick="show('{{ str_replace('-', '_', $key) }}')">
                                <div class="basis-1/2">
                                    <x-row>
                                        <img src="{{ $value }}" alt="">

                                    </x-row>
                                    <x-row>
                                        {{ $key }}
                                    </x-row>

                                </div>
                            </button>
                        @endforeach
                    </x-row>
                </section>
            </div>
            <div class="basis-1/2">
                <section class="bg-gray-50" name="Choose finishing">
                    <h1 class="h-12 w-auto text-3xl">
                        2. Check the model
                    </h1>
                    <div class="flex flex-wrap">
                        @foreach ($doors as $key => $items)
                            <div class="hidden basis-full" id="{{ str_replace('-', '_', $key) }}">
                                <div class="flex flex-wrap">
                                    @foreach ($items as $item)
                                        @foreach ($item as $model => $img)
                                            <div class="basis-1/3">
                                                <div class="flex flex-wrap">
                                                    <div class="basis-full">
                                                        <img src="{{ $img }}" alt="">
                                                    </div>
                                                    <div class="basis-full">
                                                        {{ $model }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </x-row>
    </section>
    <script>
        @foreach ($doors as $key => $items)
            var {{ str_replace('-', '_', $key) }} = document.getElementById("{{ str_replace('-', '_', $key) }}");
        @endforeach
        function show(obj) {
            var target = document.getElementById(obj);

            @foreach ($doors as $key => $items)
                if (!{{ str_replace('-', '_', $key) }}.classList.contains("hidden")) {
                    {{ str_replace('-', '_', $key) }}.classList.add('hidden');
                }
            @endforeach
            if (target.classList.contains("hidden")) {
                target.classList.remove('hidden');
            }
        }
    </script>

</div>
