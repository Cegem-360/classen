<nav class="sticky" x-data="{ open: false }">
    <header class="w-full border-[1px] border-b-[#000]" id="top-header">
        <div class="flex text-xs">
            <div class="basis-1/3">
                <div class="flex">
                    <div class="basis-2/5">
                        <h1 class="m-3 ml-10">
                            <a class="" href="{{ route('index') }}" title="Classen" wire:navigate.hover>
                                <img class="min-w-24 w-24" src="{{ Vite::asset('resources/img/arcadia98-logo.svg') }}"
                                    alt="Arcadia'98">
                            </a>
                        </h1>
                    </div>
                    <div class="basis-3/5 sm:hidden">
                        <div class="flex h-full justify-center border-r-[1px] border-[#000] uppercase">
                            <a class="flex h-full items-center px-4" href="{{ route('door.index') }}"
                                wire:navigate.hover>{{ __('doors') }}</a>
                            <a class="flex h-full items-center px-4" href="{{ route('category.index') }}"
                                wire:navigate.hover>{{ __('collections') }}</a>
                            <a class="flex h-full items-center px-4" href="{{ route('rolunk') }}"
                                wire:navigate.hover>{{ __('About us') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex basis-2/3 items-center justify-end">
                <div class="flex basis-1/2 md:hidden sm:hidden">
                    <a class="flex h-full items-center px-4" href="{{ route('kapcsolat') }}"
                        wire:navigate.hover>{{ __('Kapcsolat') }}</a>
                    <a class="flex h-full items-center px-4" href="{{ route('szolgaltatasaink') }}"
                        wire:navigate.hover>{{ __('Szolgáltatásaink') }}</a>
                    <a class="flex h-full items-center px-4" href="{{ route('downloads') }}"
                        wire:navigate.hover>Letöltések</a>
                    <a class="flex h-full items-center px-4" href="{{ route('quotation.index') }}"
                        wire:navigate.hover>Árajánlat</a>
                </div>
                <div class="relative flex h-full basis-1/2 items-center justify-between">
                    <livewire:search-box />
                    <a class="flex h-full w-16 items-center justify-center border-x-[1px] border-[#000]"
                        href="{{ route('favorites.index') }}" wire:navigate>
                        <x-svg.heart />
                    </a>
                    <!-- Mobile Nav -->
                    <div class="hidden h-full w-16 items-center justify-center md:flex" id="nav-mobile">
                        <!-- Hamburger Icon -->
                        <input id="overlay-input" type="checkbox" />
                        <label id="overlay-button" for="overlay-input"><span></span></label>

                        <!-- Navigation Menu -->
                        <nav class="hidenav fixed left-0 right-0 top-0" id="overlay">
                            <ul
                                class="flex min-h-screen flex-col items-center justify-start bg-white py-24 text-center uppercase text-black">
                                <li>

                                    <livewire:searchbox />
                                </li>
                                <li><a class="flex h-full items-center px-4" href="{{ route('door.index') }}"
                                        wire:navigate.hover>{{ __('doors') }}</a></li>
                                <li><a class="flex h-full items-center px-4" href="{{ route('category.index') }}"
                                        wire:navigate.hover>{{ __('collections') }}</a></li>
                                <li><a class="flex h-full items-center px-4" href=""
                                        wire:navigate.hover>{{ __('About us') }}</a></li>
                                <li><a class="flex h-full items-center px-4" href=""
                                        wire:navigate.hover>{{ __('Our stores') }}</a></li>
                                <li><a class="flex h-full items-center px-4" href=""
                                        wire:navigate.hover>{{ __('Where to buy') }}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</nav>
