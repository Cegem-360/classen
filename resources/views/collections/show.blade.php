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
    @isset($category->technical_parameter)
        @isset($category->additional_options)
            <x-collections.partials.technical-parameters :technical_parameter='$category->technical_parameter' :additional_options='$category->additional_options' />
        @endisset
    @endisset

    <!-- gap -->
    <div class="min-h-[60px]"></div>
    @if (!empty($tags) && !empty($doors))
        <x-collections.partials.door-options :tags='$tags' :doors='$doors' />
    @endif
    @php
        $photos = [
            'Adjustable door frame' => ['http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_6_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_6.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_7_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_5_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_3_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_1_en.jpg'],
            'Adjustable non-rebated door frame' => ['http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_6_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_5_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_4_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_3_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_2_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_1_en.jpg'],
            'Standard 2-Pack door frame' => ['http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/std_2_pack_4_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/std_2_pack_3_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/std_2_pack_2_en.jpg', 'http://admin.classen.cegem360.hu/wp-content/uploads/2024/02/std_2_pack_1_en.jpg'],
        ];
    @endphp
    @if ($category->name == 'Adjustable door frame')
        <x-collections.partials.photos :photos="$photos['Adjustable door frame']" />
    @endif
    @if ($category->name == 'Adjustable non-rebated door frame')
        <x-collections.partials.photos :photos="$photos['Adjustable non-rebated door frame']" />
    @endif
    @if ($category->name == 'Standard 2-Pack door frame')
        <x-collections.partials.photos :photos="$photos['Standard 2-Pack door frame']" />
    @endif

    <x-footer.layout />

</x-layouts.app>
