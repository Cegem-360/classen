<nav class="px-8 py-8">
    <ul class="breadcrumbs__list">
        <li class="breadcrumbs__item">
            <a class="home" href="/" wire:navigate itemprop="item">Főoldal</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="/ajtok/" wire:navigate itemprop="item">Ajtók</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="/lakkozott-ajtok/" wire:navigate itemprop="item">Lakkozott ajtók</a>
        </li>
        <li class="breadcrumbs__item">
            <strong>{{ $slot }}</strong>
        </li>
    </ul>
</nav>
