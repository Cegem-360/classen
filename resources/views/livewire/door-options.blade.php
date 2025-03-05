<div>
    <script>
        document.addEventListener('livewire:navigated', () => {
            $('.items.items-center').children().hide();
            $('.items.items-center').first().show();
        });

        function selectColor(string) {
            $('.active').removeClass('active');
            $('.items.items-center').children().hide();
            $("#" + string + "-door").show();
            $("#" + string + "-icon").addClass('active');
        }

        function hideOthers(string) {
            setTimeout(function() {
                selectColor(string);
            }, 600);

        }
    </script>
    <!-- Elérhető opciók -->
    <div class="mx-8">
        <h2 class="mb-3 text-4xl font-bold">{{ __('Available options') }}</h2>
        <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
        <div class="min-h-[30px]"></div>

        <div class="grid grid-cols-2 gap-8 bg-neutral-100 sm:grid-cols-1">
            <div class="doors__col doors__colors bg-neutral-200 px-4 py-8">
                <h3 class="doors__subheader mb-6 text-2xl font-bold">
                    <strong class="text-4xl text-sarga">1.</strong>{{ __(' Choose the surface colour') }}
                </h3>
                <div class="door_colors !grid min-h-[330px] grid-cols-4 items-start lg:grid-cols-3 md:grid-cols-2">
                    @foreach ($tags as $name => $tag)
                        @if ($loop->first)
                            <script>
                                document.addEventListener('livewire:navigated', () => {
                                    hideOthers('{{ $tag['tag'] }}');
                                });
                            </script>
                        @endif
                        <div class="door_color m-px !h-auto !w-auto cursor-pointer p-3" id="{{ $tag['tag'] }}-icon">
                            <div class="door_color__wrapper">
                                <div class="door_color__image" onclick="selectColor('{{ $tag['tag'] }}')">
                                    <img src="{{ $tag['tag_img_url'] }}" alt="White">
                                </div>
                                <div class="door_color__meta mt-3">
                                    <h4> {{ __($name) }}</h4>
                                    <p class="text-sm font-bold">{{ __($tag['tag_category']) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="doors__col doors__fronts p-8" id="doors__fronts">
                <h3 class="doors__subheader mb-6 text-2xl font-bold">
                    <strong class="text-4xl text-sarga">2.</strong> Ellenőrizze a modellt
                </h3>
                <div class="door_fronts">
                    <div class="w-full">
                        <div class="items items-center">
                            @foreach ($doors as $head => $collection)
                                <div class="grid grid-cols-3 gap-6 py-3 md:grid-cols-2" id="{{ $head }}-door">
                                    @foreach ($collection as $item)
                                        <div class="option-item relative grid">
                                            <img class="max-h-[500px]" src="{{ $item->img_url }}" alt=""
                                                loading="lazy">

                                            <h4 class="mt-3">
                                                {{ __($item->name) }}
                                                @if (Request::path() == 'kollekciok/Rakt%C3%A1ri%20ajt%C3%B3k')
                                                    <span>:
                                                        {{ Number::format(intval((string) $item->price), locale: 'hu') }}
                                                        Ft
                                                    </span>
                                                @endif

                                            </h4>

                                        </div>
                                        <a class="inline-flex items-center px-6 py-3 mt-6 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent w-fit hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900"
                                            wire:click="addToQuotation({{ $item->id }})"
                                            onclick="hideOthers('{{ $head }}')">
                                            <h5 class="mt-3 text-center text-xs font-medium">
                                                {{ __('Hozzáadás az árajánlathoz') }}
                                            </h5>
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
