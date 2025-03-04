@use('App\Models\Door')
@php
    if (!is_null(json_decode(Cookie::get('favorites')))) {
        $favoriteProductIds = json_decode(Cookie::get('favorites'));
        $favoriteProducts = collect();
        if ($favoriteProductIds != null) {
            $favoriteProducts = Door::whereIn('id', $favoriteProductIds)->get();
        }
    } else {
        $favoriteProducts = collect();
    }
@endphp
<nav class="sticky top-0 z-[99999] bg-white" x-data="{ open: false }">
    <header class="w-full border-[1px] border-b-[#000]" id="top-header">
        <div class="flex text-xs">
            <div class="basis-1/3">
                <div class="flex">
                    <div class="basis-2/5">
                        <h1 class="m-3 ml-10">
                            <a class="" href="{{ route('index') }}" title="Classen" wire:navigate>
                                <img class="w-24 min-w-24" src="{{ Vite::asset('resources/img/arcadia98-logo.svg') }}"
                                    alt="Arcadia'98">
                            </a>
                        </h1>
                    </div>
                    <div class="basis-3/5 sm:hidden">
                        <div class="flex h-full justify-center border-r-[1px] border-[#000] uppercase">
                            <a class="flex items-center h-full px-4" href="{{ route('door.index') }}"
                                wire:navigate>{{ __('doors') }}</a>
                            <a class="flex items-center h-full px-4" href="{{ route('category.index') }}"
                                wire:navigate>{{ __('collections') }}</a>
                            <a class="flex items-center h-full px-4" href="{{ route('kilincsek') }}"
                                wire:navigate>{{ __('Kilincsek') }}</a>
                            <a class="flex items-center h-full px-4" href="{{ route('rolunk') }}"
                                wire:navigate>{{ __('About us') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end basis-2/3">
                <div class="flex basis-1/2 md:hidden sm:hidden">
                    <a class="flex items-center h-full px-4" href="{{ route('kapcsolat') }}"
                        wire:navigate>{{ __('Kapcsolat') }}</a>
                    <a class="flex items-center h-full px-4" href="{{ route('szolgaltatasaink') }}"
                        wire:navigate>{{ __('Szolgáltatásaink') }}</a>
                    <a class="flex items-center h-full px-4" href="{{ route('downloads') }}"
                        wire:navigate>Letöltések</a>
                    <a class="@if (session()->get('quotation') != null) @if (session()->get('quotation')->items()->get()->isNotEmpty()) font-bold text-orange-600 @endif @endif flex h-full items-center px-4"
                        id="quotation" href="{{ route('quotation.index') }}" wire:navigate>Árajánlat kérés</a>
                </div>

                <div class="relative flex items-center justify-between h-full basis-1/2">
                    <span class="md:hidden"><livewire:search-box /></span>
                    <a class="flex h-full w-16 items-center justify-center border-x-[1px] border-[#000]"
                        href="{{ route('favorites.index') }}" wire:navigate>
                        <span class="absolute mt-12" id="favorites_numbers">
                            {{ $favoriteProducts?->count() }}
                        </span>
                        <x-svg.heart />
                    </a>
                    <!-- Mobile Nav -->
                    <div class="items-center justify-center hidden w-16 h-full md:flex" id="nav-mobile">
                        <!-- Hamburger Icon -->
                        <input id="overlay-input" type="checkbox" />
                        <label id="overlay-button" for="overlay-input"><span></span></label>

                        <!-- Navigation Menu -->
                        <nav class="fixed top-0 left-0 right-0 hidenav" id="overlay">
                            <ul
                                class="flex flex-col items-center justify-start min-h-screen py-24 text-center text-black uppercase bg-white">
                                <li>
                                    <livewire:search-box />
                                </li>
                                <li>
                                    <a class="flex items-center hidden h-full px-4 sm:list-item"
                                        href="{{ route('door.index') }}" wire:navigate>
                                        {{ __('doors') }}
                                    </a>
                                </li>
                                <li><a class="flex items-center hidden h-full px-4 sm:list-item"
                                        href="{{ route('category.index') }}" wire:navigate>{{ __('collections') }}</a>
                                </li>
                                <li><a class="flex items-center hidden h-full px-4 sm:list-item"
                                        href="{{ route('kilincsek') }}" wire:navigate>{{ __('Kilincsek') }}</a>
                                </li>
                                <li><a class="flex items-center hidden h-full px-4 sm:list-item" href=""
                                        wire:navigate>{{ __('About us') }}</a></li>
                                <li><a class="flex items-center h-full px-4" href="{{ route('kapcsolat') }}"
                                        wire:navigate>{{ __('Kapcsolat') }}</a></li>
                                <li><a class="flex items-center h-full px-4" href="{{ route('szolgaltatasaink') }}"
                                        wire:navigate>{{ __('Szolgáltatásaink') }}</a></li>
                                <li><a class="flex items-center h-full px-4" href="{{ route('downloads') }}"
                                        wire:navigate>Letöltések</a></li>
                                <li><a class="@if (!session()->missing('quotation')) @if (session()->get('quotation')->items()->get()->isNotEmpty()) font-bold text-orange-600 @endif @endif flex h-full items-center px-4"
                                        href="{{ route('quotation.index') }}" wire:navigate>Árajánlat kérés</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</nav>
<script>
    function setRedNavigation() {
        $('#quotation').addClass('font-bold text-orange-600');
    }
</script>
