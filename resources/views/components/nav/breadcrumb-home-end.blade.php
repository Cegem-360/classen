<nav class="px-8 py-8">
    <ul class="breadcrumbs__list">
        <li class="breadcrumbs__item">
            <a class="home" href="{{ route('index') }}" wire:navigate itemprop="item">{{ __('Home') }}</a>
        </li>
        <li class="breadcrumbs__item">
            <strong>{{ $slot }}</strong>
        </li>
    </ul>
</nav>
