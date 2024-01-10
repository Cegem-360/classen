<x-app-layout>
    <x-collections.partials.collection-single-item :category=$category :doors=$doors :catalogs=$catalogs :tags=$tags />
    <x-nav.breadcrumb />
    <x-collections.partials.prd-gallery :category='$category' />
    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-doors.single-prd.door-model-icons />

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-doors.single-prd.specifications />

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-doors.single-prd.door-options />

    <x-footer.layout />

</x-app-layout>
