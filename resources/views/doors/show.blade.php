<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="description"
            content="Az Arcadia98 Kft. Ajtók aloldala bemutatja {{ $category->name }} {{ $door->name }}, részletes információkat nyújt a moddelről. Fedezze fel kínálatunkat, és válasszon az Önnek legmegfelelőbb ajtók közül!">
        <meta name="keywords"
            content="ajtók, egyedi modellek, kínálat, szűrés, Arcadia98 Kft., {{ $category->name }}, {{ $door->name }}">
        <title>{{ strtoupper($door->name) }} - {{ strtoupper($category->name) }} - Arcadia98 Kft. </title>
    </x-slot>
    <x-nav.breadcrumb>
        {{ $category->name }}
    </x-nav.breadcrumb>

    <x-collections.partials.door-model-selector :category='$category' :modelVariants='$modelVariants' :door='$door' />
    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-collections.partials.door-model-icons :catalogs=$catalogs />

    <!-- gap -->
    <div class="min-h-[60px]"></div>
    <x-collections.partials.specifications :door_specification='$category->door_specification' />

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-collections.partials.technical-parameters :technical_parameter='$category->technical_parameter' :additional_options='$category->additional_options' />

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-collections.partials.door-color-variant-selector :modelVariants='$modelVariants' :colorVariants='$colorVariants' />

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-footer.layout />

</x-layouts.app>
