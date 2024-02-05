<nav class="sticky" x-data="{ open: false }">
    <header id="top-header" class="w-full border-[1px] border-b-[#000]">
        <div class="flex text-xs">
            <div class="basis-1/3">
                <div class="flex">
                    <div class="basis-2/5">
                        <h1 class="m-3 ml-10">
                            <a class="" href="{{ route('home') }}" title="Classen" wire:navigate.hover>
                                <img class="min-w-24 w-24" src="{{ Vite::asset('resources/img/arcadia98-logo.svg') }}" alt="Arcadia'98">
                            </a>
                        </h1>
                    </div>
                    <div class="basis-3/5 sm:hidden">
                        <div class="h-full flex justify-center uppercase border-r-[1px] border-[#000]">
                            <a class="px-4 flex items-center h-full" href="{{ route('door.index') }}" wire:navigate.hover>{{ __('doors') }}</a>
                            <a class="px-4 flex items-center h-full" href="{{ route('category.index') }}" wire:navigate.hover>{{ __('collections') }}</a>
                            <a class="px-4 flex items-center h-full" href="" wire:navigate.hover>{{ __('About us') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basis-2/3 flex items-center justify-end">
                <div class="basis-1/2 md:hidden flex sm:hidden">
                    <a class="px-4 flex items-center h-full" href="" wire:navigate.hover>{{ __('Our stores') }}</a>
                    <a class="px-4 flex items-center h-full" href="" wire:navigate.hover>{{ __('Where to buy') }}</a>
                </div>
                <div class="basis-1/2 relative flex items-center justify-between h-full">
                    <form class="md:hidden flex items-center border-[1px] border-[#000]" action="">
                        <input class="border-0 text-xs" name="s" type="text" placeholder="{{ __('Search') }}">
                        <button class="basis-auto pr-2">
                            <x-svg.search />
                        </button>
                    </form>
                    <a class="flex justify-center items-center w-16 h-full border-x-[1px] border-[#000]" href="{{ route('favorites') }}" wire:navigate>
                        <x-svg.heart />
                    </a>
                    <!-- Mobile Nav -->
                    <div class="hidden md:flex justify-center items-center w-16 h-full">
                        <!-- Hamburger Icon -->
                        <input type="checkbox" id="overlay-input" />
                        <label for="overlay-input" id="overlay-button"><span></span></label>

                        <!-- Navigation Menu -->
                        <nav id="overlay" class="fixed top-0 left-0 right-0 hidenav">
                            <ul class="flex flex-col items-center justify-start py-24 min-h-screen bg-white text-center text-black uppercase">
                                <li>
                                    <form class="flex items-center border-[1px] border-[#000]" action="">
                                        <input class="border-0 text-xs" name="s" type="text" placeholder="{{ __('Search') }}">
                                        <button class="basis-auto pr-2">
                                            <x-svg.search />
                                        </button>
                                    </form>
                                </li>
                                <li><a class="px-4 flex items-center h-full" href="{{ route('door.index') }}" wire:navigate.hover>{{ __('doors') }}</a></li>
                                <li><a class="px-4 flex items-center h-full" href="{{ route('category.index') }}" wire:navigate.hover>{{ __('collections') }}</a></li>
                                <li><a class="px-4 flex items-center h-full" href="" wire:navigate.hover>{{ __('About us') }}</a></li>
                                <li><a class="px-4 flex items-center h-full" href="" wire:navigate.hover>{{ __('Our stores') }}</a></li>
                                <li><a class="px-4 flex items-center h-full" href="" wire:navigate.hover>{{ __('Where to buy') }}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</nav>






<script>
    /* ###############################
           MOBILE NAV
      ##################################  */
    document.getElementById('hamburger-btn').addEventListener('click', function() {
        document.getElementById('mobile-nav').classList.toggle('hidenav');
        console.log('***HAMBURGER-CLICKED');
    });
</script>
