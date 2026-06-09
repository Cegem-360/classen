<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="description"
            content="Az Arcadia98 Kft. Ajtók Gyűjtőoldala lehetővé teszi számára, hogy böngésszen és válogasson a kínálatunkban szereplő összes ajtó között. Használja a szűrőket, hogy megtalálja az Ön számára legmegfelelőbb ajtót, és kérjen árajánlatot tőlünk még ma!">
        <meta name="keywords" content="ajtók, gyűjtőoldal, kínálat, szűrés, Arcadia98 Kft., árajánlat">
        <title>Ajtók Gyűjtőoldala - Arcadia98 Kft.</title>
    </x-slot>
    <div class="w-full">
        <livewire:filter-for-product-sidebar />
    </div>
    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-footer.layout />

</x-layouts.app>
