@props(['category' => ''])
<div class="group relative">
    <div
        class="aspect-h-1 aspect-w-1 lg:aspect-none w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-80">

        <img loading="lazy" class="h-full w-full object-cover object-center lg:h-full lg:w-full"
            src=" {{ !empty($category['img_url']) ? $category['img_url'] : Vite::asset('resources/img/placeholder.webp') }}"
            alt="Front of men&#039;s Basic Tee in black.">
    </div>
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-700">
                <a class="text-lg font-bold" href="{{ route('category.show', ['category' => $category['id']]) }}"
                    wire:navigate.hover>
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    {{ $category['name'] }}
                </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"></p>
        </div>
        <p class="text-sm font-medium text-gray-900"></p>
    </div>
</div>
