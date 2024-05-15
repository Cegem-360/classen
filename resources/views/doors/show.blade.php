@use('App\Models\MetaKeyWords')
<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="description"
            content="{{ MetaKeyWords::where('collection_name', $category->name)->first()->meta_description }}">
        <meta name="keywords" content="{{ MetaKeyWords::where('collection_name', $category->name)->first()->key_words }}">
        <title>{{ strtoupper($door->name) }} - {{ strtoupper($category->name) }} - Arcadia98 Kft. </title>
    </x-slot>
    <x-nav.breadcrumb>
        {{ __($category->name) }}
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
