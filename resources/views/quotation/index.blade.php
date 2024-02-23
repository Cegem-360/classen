<x-layouts.app>
    <x-nav.breadcrumb>
        Árajánlat kérés
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="mx-16 md:mx-8 sm:mx-4">
        <div class="mb-16">
            <h2 class="mb-3 text-4xl font-bold">Árajánlat kérés</h2>
            <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
        </div>
        <div class="max-w-7xl">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">Customers also purchased</h3>

            <div class="mt-6 grid grid-cols-6 gap-x-6 gap-y-10 md:grid-cols-4 sm:grid-cols-2">
                @foreach ($quotationItems ?? [] as $quotationItem)
                    <div class="group relative">
                        <div class="flex items-center justify-center absolute top-3 right-3 z-50 w-6 h-6 bg-[#00000022] group-hover:bg-[#00000077] border-[1px] b-white group-hover:border-0 rounded-md cursor-pointer">
                            {{-- <div class="p-3 text-white text-4xl">×</div> --}}
                            <x-svg.multiply-icon></x-svg.multiply-icon>
                        </div>
                        <div
                            class="aspect-[7/16] sm:aspect-none overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
                            <img class="object-cover object-center h-full w-full"
                                src="{{ $quotationItem->door->img_url }}" alt="{{ $quotationItem->door->name }}">
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
        <div class="divide-y max-w-xl py-12 md:max-w-4xl">
            <form action="{{ route('quotation.store') }}" method="post">
                @csrf
                <div class="mt-8 max-w-md">
                    <h1>{{ __('Quotation Request') }}</h1>
                    <p>{{ __('Please fill in the form below and we will get back to you as soon as possible.') }}</p>
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <x-input-label class="hidden" for="first_name">{{ __('First Name') }}</x-input-label>
                            <x-text-input class="form-input" name="first_name"
                                placeholder="{{ __('First Name') }}"></x-text-input>
                        </div>
                        <div>
                            <x-input-label class="hidden" for="last_name">{{ __('Last Name') }}</x-input-label>
                            <x-text-input class="form-input" name="last_name"
                                placeholder="{{ __('Last Name') }}"></x-text-input>
                        </div>
                        <div>
                            <x-input-label class="hidden" for="email">{{ __('Email') }}</x-input-label>
                            <x-text-input class="form-input" id="email" name="email" type="email"
                                placeholder="{{ __('Email') }}"></x-text-input>
                        </div>
                        <div>
                            <x-input-label class="hidden" for="phone">{{ __('Phone') }}</x-input-label>
                            <x-text-input class="form-input" id="phone" name="phone" type="tel"
                                placeholder="{{ __('Phone') }}"></x-text-input>
                        </div>
                        <div>
                            <x-input-label class="hidden" for="message">{{ __('Message') }}</x-input-label>

                            <textarea
                                class="form-textarea mt-4 block w-full border-x-0 border-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="message" name="message" placeholder="{{ __('Message') }}"></textarea>
                        </div>
                        <x-primary-button class="w-fit" type="submit">{{ __('Submit') }}</x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-layouts.app>
