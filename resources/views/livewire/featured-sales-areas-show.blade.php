<div>
    {{-- Meta tags for SEO and social sharing --}}
    <x-slot name="meta">
        <meta name="description" content="{{ $featuredSalesPage->excerpt ?? 'Kiemelt értékesítési területek' }}">
        <meta name="keywords" content="{{ $featuredSalesPage->tags ?? 'értékesítési terület, kiemelt, ajánlat' }}">
        <meta name="author" content="{{ $featuredSalesPage->author ?? 'Cegem360 Kft.' }}">
        <meta property="og:title" content="{{ $featuredSalesPage->title ?? 'Kiemelt értékesítési területek' }}">
        <meta property="og:description" content="{{ $featuredSalesPage->excerpt ?? 'Kiemelt értékesítési területek' }}">
        <meta property="og:image"
            content="{{ $featuredSalesPage->featured_media ?? asset('images/default-featured.jpg') }}">
        <meta property="og:url" content="{{ request()->url() }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $featuredSalesPage->title ?? 'Kiemelt értékesítési területek' }}">
        <meta name="twitter:description"
            content="{{ $featuredSalesPage->excerpt ?? 'Kiemelt értékesítési területek' }}">
        <meta name="twitter:image"
            content="{{ $featuredSalesPage->featured_media ?? asset('images/default-featured.jpg') }}">
    </x-slot>
    @empty($featuredSalesPage)
        <p class="text-gray-500">Nincs elérhető kiemelt értékesítési terület.</p>
    @else
        <h3 class="font-semibold text-lg text-gray-800">{{ $featuredSalesPage->title }}</h3>

        <div class="mt-2 text-gray-600">{!! $featuredSalesPage->content !!}</div>
    @endempty
</div>
