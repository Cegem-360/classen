<nav class="px-8 py-8">
    <ul class="breadcrumbs__list">
        <li class="breadcrumbs__item">
            <a class="home" href="{{ route('index') }}" wire:navigate itemprop="item">{{ __('Home') }}</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="{{ route('door.index') }}" wire:navigate itemprop="item">{{ __('doors') }}</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="{{ route('category.index') }}" wire:navigate itemprop="item">{{ __('Collections') }}</a>
        </li>
        <li class="breadcrumbs__item">
            <strong>{{ $slot }}</strong>
        </li>
    </ul>
</nav>
