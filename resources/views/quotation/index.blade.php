<x-layouts.app>
    <x-nav.breadcrumb>
        Árajánlat kérés
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="mx-16 md:mx-8 sm:mx-4">
        <div class="mb-16">
            <h2 class="mb-3 text-4xl font-bold">{{ __('Request a quote') }}</h2>
            <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
        </div>
        <div class="max-w-7xl">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">{{ __('Customers also purchased') }}</h3>
            @if ($quotationItems->isEmpty())
                <div>
                    Nincsen termék az árajánlatban.
                </div>
            @endif
            <div class="mt-6 grid grid-cols-6 gap-x-6 gap-y-10 md:grid-cols-4 sm:grid-cols-2">
                @foreach ($quotationItems ?? [] as $quotationItem)
                    <div class="group relative">
                        <livewire:remove-quotation-item :$quotationItem :key="$quotationItem->id" />
                        <div
                            class="sm:aspect-none aspect-[7/16] overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
                            <img class="h-full w-full object-cover object-center"
                                src="{{ $quotationItem->door->img_url }}" alt="{{ $quotationItem->door->name }}">
                        </div>
                        <div class="my-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a class="flex flex-col"
                                        href="{{ route('door.show', ['door' => $quotationItem->door->id]) }}"
                                        wire:navigate>
                                        <span class="inset-0" aria-hidden="true"></span>
                                        {{ $quotationItem->door->name }}
                                        <span class="inset-0" aria-hidden="true"></span>
                                        <b>{{ __($quotationItem->door->tag_name) }}</b>
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-700">{{ __($quotationItem->door->category->name) }}
                                </p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">
                                <x-collections.partials.price>{{ $quotationItem->door->price }}</x-collections.partials.price>
                            </p>

                        </div>
                        <div class="text-sm font-medium text-gray-900">
                            <livewire:update-quotation-item :$quotationItem :key="$quotationItem->id" />
                        </div>
                    </div>
                @endforeach
                <script>
                    function increment(id) {
                        document.getElementById(id).stepUp();
                    }

                    function decrement(id) {
                        document.getElementById(id).stepDown();
                    }
                </script>
                <!-- More products... -->
            </div>
        </div>

        <div class="divide-y max-w-xl py-12 md:max-w-4xl">
            <form action="{{ route('quotation.store') }}" method="post">
                @csrf
                <div class="mt-8 max-w-md">
                    <h3 class="text-xl">{{ __('Quotation Request') }}</h1>
                        <p class="mb-4">
                            {{ __('Please fill in the form below and we will get back to you as soon as possible.') }}
                        </p>
                        <x-form></x-form>
                </div>
            </form>
        </div>

    </div>

    <x-footer.layout></x-footer.layout>

</x-layouts.app>
