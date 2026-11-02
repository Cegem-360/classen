<x-filament-panels::page>
    <x-filament::section heading="Oldaltérkép">
        <p>
            Az oldaltérkép (<a class="underline" href="{{ url('sitemap.xml') }}" target="_blank">sitemap.xml</a>)
            minden éjjel automatikusan frissül.
        </p>
        <p class="mt-2 text-sm text-gray-500">
            Utoljára generálva:
            {{ $this->sitemapGeneratedAt()?->format('Y. m. d. H:i') ?? 'még nem készült' }}
        </p>
    </x-filament::section>
</x-filament-panels::page>
