<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kiemelt Értékesítési terület') }}
        </h2>
    </x-slot>

    @livewire('featured-sales-areas-show', ['slug' => $slug])

    <x-footer.layout />
</x-layouts.app>
