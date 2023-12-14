@props(['datas' => [], 'category' => [], 'catalogs' => [], 'colorVariants' => [], 'modelVariants' => []])
<div class="bg-white">
    <div class="pt-6">
        <nav aria-label="Breadcrumb">
            <ol class="mx-auto flex max-w-2xl items-center space-x-2 px-4 lg:max-w-7xl lg:px-8 sm:px-6" role="list">
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
                        <a class="mr-2 text-sm font-medium text-gray-900"
                            href="{{ route('category.show', ['category' => $category->id]) }}"
                            wire:navigate.hover>{{ $category->name }}</a>
                        <svg class="h-5 w-4 text-gray-300" aria-hidden="true" width="16" height="20"
                            viewBox="0 0 16 20" fill="currentColor">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>
                <li class="text-sm">
                    <a class="font-medium text-gray-500 hover:text-gray-600" href="#" aria-current="page">
                        {{ $datas->name }}
                    </a>
                </li>
            </ol>
        </nav>
        <!-- Image gallery -->
        <div class="mx-auto ml-20 mt-6 hidden w-full flex-auto overflow-hidden rounded-lg lg:flex">
            <div class="basis-1/2">
                <img class="mx-14 aspect-square h-auto w-auto scale-90 object-cover object-center px-16"
                    src="{{ !empty($datas->img_url) ? $datas->img_url : Vite::asset('resources/img/placeholder.webp') }}"
                    alt="Two each of gray, white, and black shirts laying flat.">
            </div>
            <div class="basis-1/2">
                <div class="flex flex-wrap">
                    <div class="basis-full">
                        <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                            <div class="lg:col-span-2 lg:border-b-4 lg:border-gray-200 lg:pr-8">
                                <h1 class="pb-3 text-5xl font-bold tracking-tight text-gray-900">
                                    {{ $datas->name }}</h1>
                                <h2 class="py-0 pb-6 pt-0 text-[100%]">
                                    <a class="text-[18px] font-normal"
                                        href="{{ route('category.show', ['category' => $category->id]) }}"
                                        wire:navigate.hover>Collection:
                                        {{ $category->name }}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="basis-full">
                        <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                            <div class="lg:col-span-2 lg:pr-8">
                                <h1 class="pb-3 text-5xl font-bold tracking-tight text-gray-900">
                                    {{ __('See other models from this collection') }}</h1>
                                <div class="py-0 pb-6 pt-0 text-[100%]">
                                    <div class="flex flex-nowrap">
                                        @foreach ($modelVariants as $model)
                                            @if ($model->name != $datas->name)
                                                <div class="basis-auto">
                                                    <div class="flex flex-wrap">
                                                        <div class="basis-full">
                                                            <img src="{{ $model->img_url }}">
                                                        </div>
                                                        <div class="basis-full">
                                                            {{ $model->name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product info -->
        <div class="mt-9 flex w-full flex-row flex-wrap">
            @foreach ($catalogs as $catalog)
                <x-doors.partials.attribute :catalog=$catalog />
            @endforeach
        </div>
        <div class="mt-9 flex w-full flex-row flex-wrap">
            @foreach ($category->door_specification ?? [] as $row)
                <div class="basis-full">
                    <div class="flex flex-wrap">
                        <div class="basis-1/3">
                            @foreach ($row['oszlop_1'] ?? [] as $col)
                                <div class="flex flex-wrap border-1 border-gray-400">

                                    <h3 class="basis-full">{{ $col['cim'] }}</h3>
                                    @foreach ($col['almezo_tartalom'] as $subrow)
                                        <div class="basis-full">
                                            {{ $subrow['tartalom'] }}
                                        </div>
                                    @endforeach

                                </div>
                            @endforeach
                        </div>
                        <div class="basis-1/3">
                            @foreach ($row['oszlop_2'] ?? [] as $col)
                                <div class="flex flex-wrap border-1 border-gray-400">

                                    <h3 class="basis-full">{{ $col['cim'] }}</h3>
                                    @foreach ($col['almezo_tartalom'] as $subrow)
                                        <div class="basis-full">
                                            {{ $subrow['tartalom'] }}
                                        </div>
                                    @endforeach

                                </div>
                            @endforeach
                        </div>
                        <div class="basis-1/3">
                            @foreach ($row['oszlop_3'] ?? [] as $col)
                                <div class="flex flex-wrap border-1 border-gray-400">

                                    <h3 class="basis-full">{{ $col['cim'] }}</h3>
                                    @foreach ($col['almezo_tartalom'] as $subrow)
                                        <div class="basis-full">
                                            {{ $subrow['tartalom'] }}
                                        </div>
                                    @endforeach

                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <x-row>
            <div class="basis-1/3">
                {{-- img --}}
                <!--img -->
                <div class="flex flex-wrap">
                    @foreach ($colorVariants as $key => $variants)
                        @foreach ($variants as $variant)
                            <div class="hidden basis-full" id='{{ str_replace('-', '_', $key) }}'>
                                <img id="" src="{{ $variant->img_url }}">
                            </div>
                        @endforeach
                    @endforeach

                </div>
            </div>
            <div class="basis-2/3">
                {{-- variants --}}
                <div class="flex flex-wrap">
                    {{-- primo --}}
                    <div class="basis-full">
                        {{-- Primo,uni-white [] --}}
                        @foreach ($colorVariants as $key => $variants)
                            @foreach ($variants as $variant)
                                <button>
                                    <img id="" src="{{ $variant->tag_img_url }}"
                                        onClick="show('{{ str_replace('-', '_', $key) }}')">
                                </button>
                            @endforeach
                        @endforeach

                    </div>
                </div>
            </div>
        </x-row>
        <script>
            @foreach ($colorVariants as $key => $items)
                var {{ str_replace('-', '_', $key) }} = document.getElementById('{{ str_replace('-', '_', $key) }}');
            @endforeach
            function show(obj) {
                var target = document.getElementById(obj);

                @foreach ($colorVariants as $key => $items)
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
</div>
