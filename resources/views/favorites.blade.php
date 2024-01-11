<x-layouts.app>

    <x-slot name="header">
        <div class="mb-4 flex items-center justify-between font-bold">
            <div class="basis-auto">
                <h1 class="mx-1 px-2 text-primary">{{ __('Favorites') }}</h1>
            </div>
        </div>
    </x-slot>

    <main class="flex w-full flex-wrap">
        <x-doors.layout :products="$products" />
    </main>
</x-layouts.app>
