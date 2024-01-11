@props(['catalog' => '', 'qtip' => 0])
<li class="catalog-icons__item">
    <img src="{{ $catalog->img }}" alt="" loading="lazy">
    <span>{{ __($catalog->name) }}</span>
    <span class="jsTooltipBig" data-qtip-title="{{ __($catalog->name) }}" data-qtip-text="{!! __($catalog->value) !!}"
        data-hasqtip="0" aria-describedby="qtip-{{ $qtip }}">
    </span>
</li>
