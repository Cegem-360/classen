<x-layouts.app>
    <x-nav.breadcrumb>
        {{ $category->name }}
    </x-nav.breadcrumb>
    <x-collections.partials.prd-gallery :category='$category' />
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

    <x-collections.partials.door-options :tags='$tags' :doors=$doors />

    <x-footer.layout />

</x-layouts.app>
