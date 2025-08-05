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
        <style>
            .featured-sales-wrapper {

                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                    margin-bottom: 1rem;
                }

                h1 {
                    font-size: 2rem;
                    font-weight: bold;
                }

                h2 {
                    font-size: 1.75rem;
                    font-weight: semi-bold;
                }

                h3 {
                    font-size: 1.5rem;
                    font-weight: semi-bold;
                }

                h4 {
                    font-size: 1.25rem;
                    font-weight: semi-bold;
                }

                h5 {
                    font-size: 1rem;
                    font-weight: semi-bold;
                }

                h6 {
                    font-size: 0.875rem;
                    font-weight: semi-bold;
                }

                p {
                    margin: 1rem 0;
                }

                ul,
                ol {
                    margin: 1rem 0;
                }
        </style>
    </x-slot>
    @empty($featuredSalesPage)
        <p class="text-gray-500">Nincs elérhető kiemelt értékesítési terület.</p>
    @else
        <div class="mx-auto max-w-4xl">
            <h3 class="mb-4 font-semibold text-lg text-gray-800">{{ $featuredSalesPage->title }}</h3>

            <div class="featured-sales-wrapper mt-2 text-gray-600">{!! $featuredSalesPage->content !!}</div>
        </div>
    @endempty
</div>
