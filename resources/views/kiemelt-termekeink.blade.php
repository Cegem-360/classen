<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">

        <title>
            Kiemelt Termékeink | Beltéri Ajtók - Arcadia 98 Kft.
        </title>
        <meta name="description"
            content="Fedezze fel az Arcadia 98 Kft. kiemelt beltéri ajtóit! Kínálatunkban festett ajtók, fa mintázatú ajtók és különböző stílusú ajtók széles választéka található, kiváló minőségben és tartóssággal.">
        <meta name="keywords"
            content="kiemelt beltéri ajtók, festett ajtók, fa mintázatú ajtók, modern ajtók, klasszikus ajtók, rusztikus ajtók, Arcadia 98 Kft., Budapest, Citroën utca 4.">
        <link rel="canonical" href="{{ Request::url() }}">
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Product",
          "name": "Kiemelt Termékeink",
          "description": "Fedezze fel az Arcadia 98 Kft. kiemelt beltéri ajtóit! Kínálatunkban festett ajtók, fa mintázatú ajtók és különböző stílusú ajtók széles választéka található, kiváló minőségben és tartóssággal.",
          "brand": {
            "@type": "Brand",
            "name": "Arcadia 98 Kft."
          }
        }
        </script>
    </x-slot>

    <x-nav.breadcrumb>
        Kiemelt Termékeink
    </x-nav.breadcrumb>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <div class="container px-4 py-8 mx-auto">
        <h1 class="mb-6 text-3xl font-bold">Kiemelt Termékeink</h1>
        <ul class="list-disc list-inside">
            <li>
                <a href="{{ route('meta') }}" class="text-blue-500 hover:underline">
                    Fa mintázatú beltéri ajtók, festett beltéri ajtók, modul beltéri ajtók, technikai beltéri ajtók
                </a>
            </li>
            <li>
                <a href="{{ route('enterior') }}" class="text-blue-500 hover:underline">
                    Enteriőrbe illő bejárati ajtók - Stílus és biztonság
                </a>
            </li>
            <li>
                <a href="{{ route('modern') }}" class="text-blue-500 hover:underline">
                    Modulajtók - Stílus, funkcionalitás és minőség
                </a>
            </li>
            <li>
                <a href="{{ route('woodenstyle') }}" class="text-blue-500 hover:underline">
                    Fa mintázatú ajtók - Természetes elegancia és stílus
                </a>
            </li>
        </ul>
    </div>

    <!-- gap -->
    <div class="min-h-[180px] md:min-h-[60px]"></div>

    <x-footer.layout />

</x-layouts.app>
