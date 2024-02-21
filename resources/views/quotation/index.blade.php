<x-layouts.app>

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 lg:max-w-7xl lg:px-8 sm:px-6 sm:py-24">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 xl:gap-x-8 lg:grid-cols-4 sm:grid-cols-2">
                @foreach ($quotationItems ?? [] as $quotationItem)
                    <div class="group relative">
                        <div
                            class="aspect-h-1 aspect-w-1 lg:aspect-none w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-80">
                            <img class="h-full w-full object-cover object-center lg:h-full lg:w-full"
                                src="{{ $quotationItem->door->img_url }}" alt="Front of men&#039;s Basic Tee in black.">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="{{ route('door.show', ['door' => $quotationItem->door->id]) }}"
                                        wire:navigate>
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        {{ $quotationItem->door->name }}
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        <b>{{ $quotationItem->door->tag_name }}</b>
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $quotationItem->door->category->name }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                    </div>
                @endforeach
                <!-- More products... -->
            </div>
        </div>
    </div>

    <div class="divide-y mx-auto max-w-xl py-12 md:max-w-4xl">
        <form action="{{ route('quotation.store') }}" method="post">
            @csrf
            <div class="mt-8 max-w-md">
                <h1>{{ __('Quotation Request') }}</h1>
                <p>{{ __('Please fill in the form below and we will get back to you as soon as possible.') }}</p>
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <x-input-label for='first_name'>{{ __('First Name') }}</x-input-label>
                        <x-text-input class="form-input" name='first_name'></x-text-input>
                    </div>
                    <div>
                        <x-input-label for="last_name">{{ __('Last Name') }}</x-input-label>
                        <x-text-input class="form-input" name='last_name'></x-text-input>
                    </div>
                    <div>
                        <x-input-label for="email">{{ __('Email') }}</x-input-label>
                        <input
                            class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            class="form-input" id="email" name="email" type="email">
                    </div>
                    <div>
                        <x-input-label for="phone">{{ __('Phone') }}</x-input-label>

                        <input
                            class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            id="phone" name="phone" type="tel">
                    </div>
                    <div>
                        <x-input-label for="massage">{{ __('Massage') }}</x-input-label>

                        <textarea
                            class="form-textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            id="massage" name="massage"></textarea>
                    </div>
                    <x-secondary-button>{{ __('Submit') }}</x-secondary-button>
                </div>
            </div>
        </form>
    </div>

</x-layouts.app>
