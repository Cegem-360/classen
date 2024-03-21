<div class="grid grid-cols-[1fr_3fr] md:grid-cols-[1.5fr_3fr] sm:grid-cols-1">
    @use('\Illuminate\Pagination\LengthAwarePaginator')
    <div class="h-full bg-[#9f9f9f] pl-8 pt-16 text-white">
        <h3 class="text-xl font-bold uppercase">Ajtó kollekciók</h3>
        <hr class="relative mb-6 mt-4 h-1 w-full border-0 bg-white">
        <p class="mb-6 font-bold">Válasszon lenyűgöző ajtók közül.</p>
        <h3 class="mb-3 text-xl font-bold">Személyre szabott keresés</h3>
        <div>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Colours') }}</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
                <div>
                    <label for="options">
                        <input type="checkbox" value="sonoma_oak" wire:model="options.decor.sonoma_oak"
                            wire:click="$refresh" />
                        {{ __('sonoma oak') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="natural_oak" wire:model="options.decor.natural_oak"
                            wire:click="$refresh" />
                        {{ __('natural oak') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="gray_oak" wire:model="options.decor.gray_oak"
                            wire:click="$refresh" />
                        {{ __('gray oak') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="beech" wire:model="options.decor.beech" wire:click="$refresh" />
                        {{ __('beech') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="wenge" wire:model="options.decor.wenge" wire:click="$refresh" />
                        {{ __('wenge') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="walnut" wire:model="options.decor.walnut" wire:click="$refresh" />
                        {{ __('walnut') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="acacia_light" wire:model="options.decor.acacia_light"
                            wire:click="$refresh" />
                        {{ __('acacia light') }}
                    </label>
                </div>
            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Finishing and surface durability') }}</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
                <div>
                    <div>
                        <label for="options">
                            <input type="checkbox" value="3d_finishing" wire:model="options.surface.3d_finishing"
                                wire:click="$refresh" />
                            {{ __('3D finishing') }}
                        </label>
                    </div>
                    <div>
                        <label for="options">
                            <input type="checkbox" value="iridium_finishing"
                                wire:model="options.surface.iridium_finishing" wire:click="$refresh" />
                            {{ __('Iridium finishing') }}
                        </label>
                    </div>
                    <div>
                        <label for="options">
                            <input type="checkbox" value="cpl_laminate" wire:model="options.surface.cpl_laminate"
                                wire:click="$refresh" />
                            {{ __('CPL laminate') }}
                        </label>
                    </div>
                    <div>
                        <label for="options">
                            <input type="checkbox" value="hpl_laminate" wire:model="options.surface.hpl_laminate"
                                wire:click="$refresh" />
                            {{ __('HPL laminate') }}
                        </label>
                    </div>
                    <div>
                        <label for="options">
                            <input type="checkbox" value="lacquered" wire:model="options.surface.lacquered"
                                wire:click="$refresh" />
                            {{ __('Lacquered') }}
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Purpose') }}</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
                <div>
                    <label for="options">
                        <input type="checkbox" value="room_door" wire:model="options.purpose.room_door"
                            wire:click="$refresh" />
                        {{ __('room door') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="bathroom_door" wire:model="options.purpose.bathroom_door"
                            wire:click="$refresh" />
                        {{ __('bathroom door') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="technical_doors" wire:model="options.purpose.technical_doors"
                            wire:click="$refresh" />
                        {{ __('technical doors') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="sliding_door" wire:model="options.purpose.sliding_door"
                            wire:click="$refresh" />
                        {{ __('sliding door') }}
                    </label>
                </div>

            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Style') }}</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
                <div>
                    <label for="options">
                        <input type="checkbox" value="modern" wire:model="options.style.modern"
                            wire:click="$refresh" />
                        {{ __('modern') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="classic" wire:model="options.style.classic"
                            wire:click="$refresh" />
                        {{ __('classic') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="loft" wire:model="options.style.loft"
                            wire:click="$refresh" />
                        {{ __('loft') }}
                    </label>
                </div>
            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">Szélesség</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
                <div>
                    <label for="options">
                        <input type="checkbox" value="width 60" wire:model="options.width.width_60"
                            wire:click="$refresh" />
                        {{ __('60') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="width_70" wire:model="options.width.width_70"
                            wire:click="$refresh" />
                        {{ __('70') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="width_80" wire:model="options.width.width_80"
                            wire:click="$refresh" />
                        {{ __('80') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="width_90" wire:model="options.width.width_90"
                            wire:click="$refresh" />
                        {{ __('90') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="width_100" wire:model="options.width.width_100"
                            wire:click="$refresh" />
                        {{ __('100') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="width_110" wire:model="options.width.width_110"
                            wire:click="$refresh" />
                        {{ __('110') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="width_120" wire:model="options.width.width_120"
                            wire:click="$refresh" />
                        {{ __('120') }}
                    </label>
                </div>
            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Construction') }}</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
                <div>
                    <label for="options">
                        <input type="checkbox" value="panel_doors" wire:model="options.construction.panel_doors"
                            wire:click="$refresh" />
                        {{ __('panel doors') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="framed_doors" wire:model="options.construction.framed_doors"
                            wire:click="$refresh" />
                        {{ __('framed doors') }}
                    </label>
                </div>
            </fieldset>
        </div>
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js"
            integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/solid.min.js"
            integrity="sha512-+fI924YJzeYFv7M0R29zJvRThPinSUOAmo5rpR9v6G4eWIbva/prHdZGSPN440vuf781/sOd/Fr+5ey0pqdW9w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </div>

    <div class="relative mx-12 my-16 w-3/4">
        <h1 class="text-3xl font-bold uppercase">Összes ajtó</h1>
        <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
        <a class="absolute md:relative right-0 top-0 flex w-fit items-center justify-between gap-6 border-1 border-black px-6 py-3"
            href="{{ route('category.index') }}" wire:navigate.hover>
            <h2 class="font-bold text-black">{{ __('Go to collections') }}</h2>
            <div class="scale-75"><x-doors.partials.arrow-right class="![fill:black]"></x-doors.partials.arrow-right>
            </div>
        </a>
        <!-- gap -->
        <div class="min-h-[60px]"></div>
        <div wire:loading>
            {{ __('Searching...') }}
        </div>
        <div wire:loading.remove>
            <div class="mx-8 grid grid-cols-4 gap-6 md:grid-cols-2 sm:grid-cols-1">

                @foreach ($doors as $door)
                    <div class="relative grid place-content-center bg-neutral-100 px-6 pb-2 pt-12">
                        <button class="favorite" onclick="initFavoritesJS.toggleFavoriteItem('{{ $door->id }}')">
                            <x-svg.heart class="" id="heart-{{ $door->id }}"> </x-svg.heart>
                        </button>
                        <a class="" href="{{ route('door.show', ['door' => $door->id]) }}" wire:navigate>
                            <img class="max-h-[330px]"
                                src="{{ !empty($door->img_url) ? $door->img_url : Vite::asset('resources/img/placeholder.webp') }}"
                                loading='lazy' />
                            <div class="w-full pt-2">
                                <h4 class="font-bold">{{ $door->category->name }} - {{ $door->name }}</h4>
                                <p>{{ __($door->tag_name) }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
            <!-- gap -->
            <div class="min-h-[60px]"></div>
            @if ($doors instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $doors->links() }}
            @endif
        </div>
    </div>
</div>
