@props(['catalog' => ''])
<div class="basis-1/6 list-none">
    <img class="h-16 w-auto" src="{{ $catalog->img }}" alt="">
    <span class="mx-0 my-[1em] text-xl font-bold">{{ __($catalog->name) }}</span>
    <span class="jsTooltipBig" data-qtip-title="Classen CPL"
        data-qtip-text="Laminate characterized by very high scratch and abrasion resistance, composed of four hot-pressed layers with the use of special adhesives, covered with a durable overlay lacquer. The main advantages include particularly high scratch and abrasion, high temperatures, UV and chemical resistance."
        data-hasqtip="0" aria-describedby="qtip-0">
    </span>
</div>
