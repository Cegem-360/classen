@props(['category' => []])
<div>
    <li class="products-list__tile">
        <a href="{{ route('category.show', ['category' => $category['name']]) }}" wire:navigate.hover>
            <div class="tile">
                <figure class="tile__image aspect-[40/27] overflow-hidden">
                    <img src=" {{ !empty($category['img_url']) ? $category['img_url'] : Vite::asset('resources/img/placeholder.webp') }}"
                        alt="Clif">
                </figure>
                <h3 class="tile__header hyphenate">{{ __($category['name']) }}</h3>
                <div class="tile__icon">
                    <x-doors.partials.arrow-right />
                </div>
            </div>
        </a>
    </li>
</div>
