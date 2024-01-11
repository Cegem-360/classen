@props(['technical_parameter' => [], 'additional_options' => []])
<!-- Technikai paraméterek -->
<div class="bg-neutral-200">
    <div class="mx-8 py-12">
        <h2 class="mb-3 text-4xl font-bold">Technikai paraméterek</h2>
        <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
        <div class="min-h-[30px]"></div>

        <div class="grid grid-cols-3 gap-8 md:grid-cols-2 sm:grid-cols-1">
            @foreach ($technical_parameter ?? [] as $row)
                @for ($i = 1; $i < 4; $i++)
                    @foreach ($row['oszlop_' . $i] ?? [] as $col)
                        <div class="properties__box">
                            <article class="property">
                                <header class="property__header">
                                    <h3>{{ __($col['cim']) }}</h3>
                                </header>
                                <ul class="property__list">
                                    @foreach ($col['almezo_tartalom'] ?? [] as $subrow)
                                        <li class="property__item">
                                            <div class="property__inner">
                                                <div class="property__name">
                                                    {{ __($subrow['tartalom']) }}
                                                </div>
                                                <div class="property__value">

                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </article>
                        </div>
                    @endforeach
                @endfor
            @endforeach

        </div>
    </div>

    {{-- additional options --}}
    <x-collections.partials.additional-options :additional_options='$additional_options' />
</div>
