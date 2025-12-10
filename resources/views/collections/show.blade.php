@use('App\Models\MetaKeyWords')
<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="description"
            content="{{ MetaKeyWords::where('collection_name', $category->name)->firstOrCreate(['collection_name' => $category->name, 'meta_description' => 'Arcadia98 Kft. letölthető dokumentumok: bővített beltéri ajtókatalógus 2024, Dooroutlet belteri ajtó raktári üveges színek 2024, Dooroutlet ajtólap méretek és nyitási irányok, Dooroutlet utólag beépíthető falcolt tok méretek, Arcadia 98 Kft. bruttó Kiskereskedelmi árlista 2023.'])->meta_description }}">
        <meta name="keywords" content="{{ MetaKeyWords::where('collection_name', $category->name)->first()->key_words }}">
        <link rel="canonical" href="{{ Request::url() }}">
        <title>{{ __($category->name) }} Kollekció - Arcadia98 Kft.</title>
    </x-slot>
    <x-nav.breadcrumb>
        {{ __($category->name) }}
    </x-nav.breadcrumb>

    <x-collections.partials.prd-gallery :category='$category' />
    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-collections.partials.door-model-icons :catalogs=$catalogs />

    <!-- gap -->
    <div class="min-h-[90px]"></div>

    @if (!empty($tags) && !empty($doors))
        <livewire:door-options :tags='$tags' :doors='$doors' />
    @endif
    @php
        $photos = [
            'Adjustable door frame' => [
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_6_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_6.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_7_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_5_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_3_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_1_en.jpg',
            ],
            'Adjustable non-rebated door frame' => [
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_6_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_5_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_4_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_3_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_2_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/regulowana_b_1_en.jpg',
            ],
            'Standard 2-Pack door frame' => [
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/std_2_pack_4_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/std_2_pack_3_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/std_2_pack_2_en.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2024/02/std_2_pack_1_en.jpg',
            ],
            'Adjustable Reverse 80 door frame' => [
                'https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/rew-1-en-270x200-1.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/rew-2-en-270x200-1.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/rew-3-en-270x200-1.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/rew-4-en-270x200-1.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/rew-5-en-270x200-1.jpg',
                'https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/rew-6-en-270x200-1.jpg',
            ],
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
    @if ($category->name == 'Adjustable Reverse 80 door frame')
        <x-collections.partials.photos :photos="$photos['Adjustable Reverse 80 door frame']" />
    @endif

    <!-- gap -->
    <div class="min-h-[90px]"></div>
    <x-collections.partials.specifications :door_specification='$category->door_specification' />

    <!-- gap -->
    <div class="min-h-[10px]"></div>

    @isset($category->technical_parameter && $category->additional_options)
        <x-collections.partials.technical-parameters :technical_parameter='$category->technical_parameter' :additional_options='$category->additional_options' />
    @endisset

    <x-footer.layout></x-footer.layout>

</x-layouts.app>
