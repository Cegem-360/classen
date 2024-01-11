<nav class="" x-data="{ open: false }">
    <header class="fixed left-0 top-0 contents h-20 w-full" id="top-header">
        <div class="flex flex-row flex-wrap">
            <div class="basis-1/3">
                <div class="flex flex-row">
                    <div class="basis-2/5">
                        <h1 class="mb-0 ml-[2.7%] mr-0 mt-6">
                            <a class="box-border no-underline" href="/" title="Classen" wire:navigate.hover>
                                <img class="block h-8 w-32" src="https://classen.pl/app/themes/classen/img/logo_old.svg"
                                    alt="Classen">
                            </a>
                        </h1>
                    </div>
                    <div class="basis-3/5">
                        <div class="flex flex-row">
                            <div class="basis-1/3 justify-center py-[1vw] pt-[33px] text-center uppercase">
                                <a href="{{ route('kollekciok') }}" wire:navigate.hover>{{ __('doors') }}</a>
                            </div>
                            <div class="mx-auto basis-1/3 justify-center py-[1vw] pt-[33px] text-center uppercase">
                                fronts</div>
                            <div class="basis-1/3 justify-center py-[1vw] pt-[33px] text-center uppercase">
                                <a href="" wire:navigate.hover>blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basis-2/3">
                <div class="flex flex-row">
                    <div class="basis-2/12 justify-center py-[1vw] pt-[33px] text-center uppercase">
                        <a href="" wire:navigate.hover>About us</a>
                    </div>
                    <div class="basis-1/12 justify-center py-[1vw] pt-[33px] text-center uppercase">
                        <a href="" wire:navigate.hover> Downloads</a>
                    </div>
                    <div class="basis-2/12 justify-center py-[1vw] pt-[33px] text-center uppercase">
                        <a href="" wire:navigate.hover>Where to buy</a>
                    </div>
                    <div class="basis-2/12 justify-center py-[1vw] pt-[33px] text-center uppercase">
                        <a href="" wire:navigate.hover> Client zone</a>
                    </div>
                    <div class="basis-3/12 justify-center py-[1vw] pt-[33px] text-center uppercase">
                        <aside class="flex flex-nowrap">
                            <form class="basis-full" action="https://classen.pl/en/">
                                <div class="flex flex-nowrap justify-between border-1 border-gray-1000">
                                    <div class="basis-auto">
                                        <input class="border-0" name="s" type="text" placeholder="Search">
                                    </div>
                                    <button class="basis-auto pr-2">
                                        <x-svg.search />
                                    </button>
                                </div>

                            </form>

                        </aside>
                    </div>

                    <div class="basis-1/12 justify-center px-3 py-[1vw] pt-[25px] text-center uppercase">
                        <a class="position-relative line-clamp-5 h-14 border-x-1 border-gray-400 py-4"
                            href="{{ route('favorites') }}" style="text-align: -webkit-center;" wire:navigate>
                            <x-svg.heart />
                        </a>
                    </div>
                    <div class="basis-1/12 justify-center py-[1vw] pt-[33px] text-center uppercase">
                    </div>
                </div>
            </div>
        </div>
    </header>
</nav>
