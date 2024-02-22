<x-layouts.app>
    <x-nav.breadcrumb>
        Rólunk
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="mx-16">
        <div class="mb-16 md:mx-8 sm:mx-4">
            <h2 class="mb-3 text-4xl font-bold">Kapcsolat</h2>
            <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
        </div>
        <div class="max-w-7xl grid grid-cols-2 gap-12 sm:grid-cols-1">
            <div class="">
                <h3 class="mb-3 text-xl">Arcadia 98 Kft.</h3>
                <p class="mb-1">1194 Budapest, Citroen utca 4.</p>
                <p class="mb-1"><strong>Adószám: </strong>11752550-2-43</p>
                <p class="mb-1"><strong>Cégjegyzékszám: </strong>01-09-674706</p>
                <p class="mb-1"><strong>Telefon: </strong>+36 1 430 3344</p>
                <p class="mb-1"><strong>E-mail cím: </strong><a href="mailto:info@arcadia98.hu">info@arcadia98.hu</a></p>
                <p><strong>Nyitva tartás: </strong><br />
                    hétfő - péntek: 7:00 - 16:00, <br />
                    szombat: 9:00 - 13:00</p>
            </div>
            <div class="">
                <form action="" method="post">
                    @csrf
                    <div class="">
                        <h3 class="mb-3 text-xl font-bold">{{ __('Írjon nekünk!') }}</h3>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <x-input-label for="first_name" class="hidden">{{ __('First Name') }}</x-input-label>
                                <x-text-input class="form-input" name="first_name" placeholder="{{ __('First Name') }}"></x-text-input>
                            </div>
                            <div>
                                <x-input-label for="last_name" class="hidden">{{ __('Last Name') }}</x-input-label>
                                <x-text-input class="form-input" name="last_name" placeholder="{{ __('Last Name') }}"></x-text-input>
                            </div>
                            <div>
                                <x-input-label for="email" class="hidden">{{ __('Email') }}</x-input-label>
                                <x-text-input class="form-input" id="email" name="email" type="email" placeholder="{{ __('Email') }}"></x-text-input>
                            </div>
                            <div>
                                <x-input-label for="phone" class="hidden">{{ __('Phone') }}</x-input-label>
                                <x-text-input class="form-input" id="phone" name="phone" type="tel" placeholder="{{ __('Phone') }}"></x-text-input>
                            </div>
                            <div>
                                <x-input-label for="message" class="hidden">{{ __('Message') }}</x-input-label>

                                <textarea class="form-textarea mt-4 block w-full border-x-0 border-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="message" name="message" placeholder="{{ __('Message') }}"></textarea>
                            </div>
                            <x-primary-button class="w-fit">{{ __('Submit') }}</x-primary-button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- gap -->
    <div class="min-h-[180px]"></div>

    <x-footer.layout />

</x-layouts.app>
