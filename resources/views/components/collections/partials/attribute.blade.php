{{-- @props(['catalog' => '', 'qtip' => 0])
<li class="catalog-icons__item">
    <img src="{{ $catalog->img }}" alt="" loading="lazy">
    <span>{{ __($catalog->name) }}</span>
    <span class="jsTooltipBig" data-qtip-title="{{ __($catalog->name) }}" data-qtip-text="{{ __($catalog->value) }}"
        data-hasqtip="0" aria-describedby="qtip-{{ $qtip }}">
    </span>
</li> --}}


@props(['catalog' => '', 'qtip' => 0])
<li class="catalog-icons__item">
    <img src="{{ $catalog->img }}" alt="" loading="lazy">
    <span>{{ __($catalog->name) }}</span>
    <span class="jsTooltipBig" 
        data-tippy-content="<h3>{{ __($catalog->name) }}</h3><p>{{ __($catalog->value) }}</p>">
    </span>
</li>

