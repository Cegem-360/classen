{{-- Schema.org LocalBusiness - Főoldal --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "@id": "{{ config('app.url') }}/#business",
    "name": "Arcadia98 Kft.",
    "alternateName": "Arcadia 98 Beltéri Ajtó",
    "description": "Beltéri ajtók forgalmazása Budapesten. CPL, dekorfóliás és festett ajtók széles választéka. Classen hivatalos forgalmazó. 25+ év tapasztalat.",
    "url": "{{ config('app.url') }}",
    "logo": {
        "@type": "ImageObject",
        "url": "{{ Vite::asset('resources/img/arcadia98-logo.svg') }}"
    },
    "image": "{{ Vite::asset('resources/img/bemutatoterem-02.webp') }}",
    "telephone": "+36 1 430 3344",
    "email": "info@arcadia98.hu",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Citroën utca 4.",
        "addressLocality": "Budapest",
        "addressRegion": "Budapest",
        "postalCode": "1194",
        "addressCountry": "HU"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "47.4283",
        "longitude": "19.1358"
    },
    "priceRange": "$$",
    "currenciesAccepted": "HUF",
    "paymentAccepted": "Készpénz, Bankkártya, Átutalás",
    "openingHoursSpecification": [
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "07:00",
            "closes": "16:00"
        },
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Saturday",
            "opens": "09:00",
            "closes": "13:00"
        }
    ],
    "areaServed": {
        "@type": "Country",
        "name": "Magyarország"
    },
    "sameAs": [
        "https://www.facebook.com/arcadia98",
        "https://www.instagram.com/arcadia98"
    ],
    "foundingDate": "1998",
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Beltéri ajtók",
        "itemListElement": [
            {"@type": "Offer", "itemOffered": {"@type": "Product", "name": "CPL beltéri ajtók"}},
            {"@type": "Offer", "itemOffered": {"@type": "Product", "name": "Dekorfóliás beltéri ajtók"}},
            {"@type": "Offer", "itemOffered": {"@type": "Product", "name": "Festett beltéri ajtók"}},
            {"@type": "Offer", "itemOffered": {"@type": "Product", "name": "Tolóajtó rendszerek"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Beltéri ajtó beépítés"}}
        ]
    }
}
</script>
