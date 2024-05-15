@use('Illuminate\Support\Str')
<div class="grid grid-cols-[1fr_3fr] md:grid-cols-[1.5fr_3fr] sm:grid-cols-1">
    <div class="h-full bg-[#9f9f9f] pl-8 pt-16 text-white">
        <h1 class="text-xl font-bold uppercase">Ajtó kollekciók</h1>
        <hr class="relative w-full h-1 mt-4 mb-6 bg-white border-0">
        <p class="mb-6 font-bold">Válasszon lenyűgöző ajtó kollekcióink közül.</p>
        <h2 class="mb-3 text-xl font-bold">Személyre szabott keresés</h2>
        <div>
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
                        <input type="checkbox" value="interior_entrance_door"
                            wire:model="options.purpose.interior_entrance_door" wire:click="$refresh" />
                        {{ __('Enteriőrbe illő bejárati ajtó') }}
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
                <div>
                    <label for="options">
                        <input type="checkbox" value="wood_door" wire:model="options.purpose.wood_door"
                            wire:click="$refresh" />
                        {{ __('Fa mintázatú ajtók') }}
                    </label>
                </div>

            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Style') }}</legend>
                <hr class="relative w-full h-px mt-1 mb-2 bg-white border-0">
                <div>
                    <label for="options">
                        <input type="checkbox" value="modern" wire:model="options.style.modern" wire:click="$refresh" />
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
                        <input type="checkbox" value="loft" wire:model="options.style.loft" wire:click="$refresh" />
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

    <div class="mx-12 my-16">
        <h1 class="text-3xl font-bold uppercase">Kollekció</h1>

        <!-- gap -->
        <div class="min-h-[60px]"></div>
        @foreach ($collections as $head => $items)
            <hr class="relative h-1 mt-8 mb-3 border-0 w-72 bg-sarga">
            <h2 class="mb-3 text-2xl" id='{{ Str::slug(__($head)) }}'>{{ __($head) }}</h2>
            {{-- title = tag value --}}
            <ul class="grid grid-cols-3 gap-4 products-list md:grid-cols-2 sm:grid-cols-1">
                @foreach ($items as $item)
                    <x-collections.item :category=$item />
                @endforeach
            </ul>
        @endforeach
    </div>
</div>
