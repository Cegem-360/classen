<div class="grid grid-cols-[1fr_3fr] md:grid-cols-[1.5fr_3fr] sm:grid-cols-1">
    @use('\Illuminate\Pagination\LengthAwarePaginator')
    <div class="h-full bg-[#9f9f9f] pl-8 pt-16 text-white">
        <h1 class="text-xl font-bold uppercase">Ajtó kollekciók</h1>
        <hr class="relative w-full h-1 mt-4 mb-6 bg-white border-0">
        <p class="mb-6 font-bold">Válasszon lenyűgöző ajtók közül.</p>
        <h2 class="mb-3 text-xl font-bold">Személyre szabott keresés</h2>
        <div>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Raktári termékek') }}</legend>
                <hr class="relative w-full h-px mt-1 mb-2 bg-white border-0">
                <div>
                    <div>
                        <label for="options">
                            <input type="checkbox" value="storage" wire:model="options.storage.storage"
                                wire:click="$refresh" />
                            {{ __('Raktári ajtók') }}
                        </label>
                    </div>
            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Legújabb színeink') }}</legend>
                <hr class="relative w-full h-px mt-1 mb-2 bg-white border-0">
                <div>
                    <label for="options">
                        <input type="checkbox" value="honey_catania" wire:model="options.decor.honey_catania"
                            wire:click="$refresh" />
                        {{ __('Honey Catania') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="cleveland_oak" wire:model="options.decor.cleveland_oak"
                            wire:click="$refresh" />
                        {{ __('Cleveland Oak') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="uni_white" wire:model="options.decor.uni_white"
                            wire:click="$refresh" />
                        {{ __('UNI White') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="uni_Black" wire:model="options.decor.uni_Black"
                            wire:click="$refresh" />
                        {{ __('UNI Black') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="hamilton_oak_vertical"
                            wire:model="options.decor.hamilton_oak_vertical" wire:click="$refresh" />
                        {{ __('Hamilton Oak Vertical') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="hamilton_oak_horizontal"
                            wire:model="options.decor.hamilton_oak_horizontal" wire:click="$refresh" />
                        {{ __('Hamilton Oak Horizontal') }}
                    </label>
                </div>

            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Finishing and surface durability') }}</legend>
                <hr class="relative w-full h-px mt-1 mb-2 bg-white border-0">
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
                <hr class="relative w-full h-px mt-1 mb-2 bg-white border-0">
                <div>
                    <label for="options">
                        <input type="checkbox" value="inner_door" wire:model="options.purpose.inner_door"
                            wire:click="$refresh" />
                        {{ __('beltéri ajtó') }}
                    </label>
                </div>
                <div>
                    <label for="options">
                        <input type="checkbox" value="room_door" wire:model="options.purpose.room_door"
                            wire:click="$refresh" />
                        {{ __('bejárati ajtó') }}
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
                <hr class="relative w-full h-px mt-1 mb-2 bg-white border-0">
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

        </div>
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js"
            integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/solid.min.js"
            integrity="sha512-+fI924YJzeYFv7M0R29zJvRThPinSUOAmo5rpR9v6G4eWIbva/prHdZGSPN440vuf781/sOd/Fr+5ey0pqdW9w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </div>

    <div class="relative w-3/4 mx-12 my-16">
        <h1 class="text-3xl font-bold uppercase">Összes ajtó</h1>
        <hr class="relative h-1 mt-8 mb-3 border-0 w-72 bg-sarga">
        <a class="absolute top-0 right-0 flex items-center justify-between gap-6 px-6 py-3 border-black group w-fit border-1 md:relative"
            href="{{ route('category.index') }}" wire:navigate.hover>
            <h2 class="font-bold text-black">{{ __('Go to collections') }}</h2>
            <div class="transition-transform scale-75 group-hover:translate-x-2"><x-doors.partials.arrow-right
                    class="![fill:black]"></x-doors.partials.arrow-right>
            </div>
        </a>
        <!-- gap -->
        <div class="min-h-[60px]"></div>
        <div wire:loading>
            {{ __('Searching...') }}
        </div>
        <div wire:loading.remove>
            <div class="grid grid-cols-4 gap-6 mx-8 md:grid-cols-2 sm:grid-cols-1">

                @foreach ($doors as $door)
                    <div class="relative grid px-6 pt-12 pb-2 place-content-center bg-neutral-100">
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
                        <div class="w-full pt-2">
                            <p class="font-bold">
                                {{ Number::format($door->price, precision: 0, locale: 'hu') }} Ft. - tól</p>
                        </div>
                        <div>

                            <button
                                class="inline-flex items-center px-6 py-3 mt-6 text-xs font-semibold tracking-widest uppercase transition duration-150 ease-in-out border-black border-1 border-spacing-1 text-gray-950 hover:text-white w-fit hover:bg-gray-400 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900"
                                type="button" wire:click="showDetails({{ $door->id }})">
                                {{ __('Részletek') }}
                            </button>

                        </div>
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
