<div class="flex">
    <div class="h-full w-1/4 bg-[#9f9f9f] pl-8 pt-16 text-white">
        <h3 class="text-xl font-bold uppercase">Ajtó kollekciók</h3>
        <hr class="relative mb-6 mt-4 h-1 w-full border-0 bg-white">
        <p class="mb-6 font-bold">Válasszon lenyűgöző ajtó kollekcióink közül.</p>
        <h3 class="mb-3 text-xl font-bold">Személyre szabott keresés</h3>
        <div>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Finishing and surface durability') }}</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
                <div>
                    <div>
                        <label for="options">
                            <input type="checkbox" value="primo_finishing" wire:model="options.surface.primo_finishing"
                                wire:click="$refresh" />
                            {{ __('Primo finishing') }}
                        </label>
                    </div>
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
                            {{ __('lacquered') }}
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">{{ __('Purpose') }}</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
                <div>
                    <input id="normal-ajto" name="normál ajtó" type="checkbox" />
                    <label for="normal-ajto">normál ajtó</label>
                </div>

            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">Stílus</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">Szélesség</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
            </fieldset>
            <fieldset class="mb-3">
                <legend class="text-lg font-bold">Konstrukció</legend>
                <hr class="relative mb-2 mt-1 h-px w-full border-0 bg-white">
            </fieldset>
        </div>
        <div class="relative mb-3">
            <h6 class="mb-0">
                <button
                    class="border-b group relative flex w-full cursor-pointer items-center border-b-1 border-solid border-white py-1 text-left font-bold transition-all ease-in"
                    data-collapse-target="animated-collapse-1">
                    <span class="text-lg">Felületkezelés</span>
                    <i
                        class="fa fa-chevron-down absolute right-4 text-base transition-transform group-open:rotate-180"></i>
                </button>
            </h6>
            <div class="h-0 overflow-hidden pt-2 transition-all duration-300 ease-in-out"
                data-collapse="animated-collapse-1">
                <fieldset class="mb-3">
                    <div>
                        <input id="hagyomanyos" name="hagyományos" type="checkbox" />
                        <label for="hagyomanyos">hagyományos</label>
                    </div>
                    <div>
                        <input id="3d" name="3D" type="checkbox" />
                        <label for="3d">3D</label>
                    </div>
                    <div>
                        <input id="iridium" name="iridium" type="checkbox" />
                        <label for="iridium">iridium</label>
                    </div>
                    <div>
                        <input id="cpl" name="CPL laminálás" type="checkbox" />
                        <label for="cpl">CPL laminálás</label>
                    </div>
                    <div>
                        <input id="hpl" name="HPL laminálás" type="checkbox" />
                        <label for="hpl">HPL laminálás</label>
                    </div>
                    <div>
                        <input id="lakkozas" name="lakkozás" type="checkbox" />
                        <label for="lakkozas">lakkozás</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js"
            integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/solid.min.js"
            integrity="sha512-+fI924YJzeYFv7M0R29zJvRThPinSUOAmo5rpR9v6G4eWIbva/prHdZGSPN440vuf781/sOd/Fr+5ey0pqdW9w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </div>

    <div class="mx-12 my-16 w-3/4">
        <h1 class="text-3xl font-bold uppercase">Kollekció</h1>

        <!-- gap -->
        <div class="min-h-[60px]"></div>
        @foreach ($collections as $head => $items)
            <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
            <h2 class="mb-3 text-2xl uppercase">{{ __($head) }}</h2>
            {{-- title = tag value --}}
            <ul class="products-list grid grid-cols-3 gap-4 md:grid-cols-2 sm:grid-cols-1">
                @foreach ($items as $item)
                    <x-collections.partials.collection-item :category=$item />
                @endforeach
            </ul>
        @endforeach
    </div>
</div>
