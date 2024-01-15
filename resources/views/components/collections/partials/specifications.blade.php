@props(['door_specification' => []])
<!-- Ajtó specifikációk -->

<div class="mx-8">
    <h2 class="mb-3 text-4xl font-bold">Ajtó specifikációk</h2>
    <hr class="relative mb-3 mt-3 h-1 w-32 border-0 bg-sarga">
    <div class="min-h-[30px]"></div>
    <div class="grid grid-cols-3 gap-8 md:grid-cols-2 sm:grid-cols-1">
        @foreach ($door_specification ?? [] as $row)
            @for ($i = 1; $i < 4; $i++)
                @foreach ($row['oszlop_' . $i] ?? [] as $col)
                    <div class="properties__box">
                        <article class="property">
                            <p class="mb-3"><strong>{{ __($col['cim']) }}</strong></p>
                            @foreach ($col['almezo_tartalom'] ?? [] as $subrow)
                                <ul class="mb-3 list-inside list-disc">
                                    <li>{{ __($subrow['tartalom']) }}</li>
                                </ul>
                            @endforeach
                        </article>
                    </div>
                @endforeach
            @endfor
        @endforeach

    </div>
</div>
