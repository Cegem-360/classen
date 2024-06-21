<x-layouts.app>
    <x-slot name="meta">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="noIndex, nofollow">
        <meta name="description"
            content="Az Arcadia98 Kft. Ajtó Kollekciók oldala bemutatja legújabb ajtó kollekcióinkat, amelyek a legfrissebb lakberendezési trendeket követik. Fedezze fel kínálatunkat, és inspirálódjon a modern és klasszikus enteriőrökben megmutatkozó stílusokkal!">
        <meta name="keywords" content="ajtók, kollekciók, enteriőr, lakberendezési trendek, Arcadia98 Kft.">
        <title>Kollekciók feltőltés</title>
    </x-slot>
    <x-nav.breadcrumb>
        {{ __('Kollekcó árak import') }}
    </x-nav.breadcrumb>
    <div class="flex">
        <form action="{{ route('exel.proccess') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">Choose Excel File</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Import</button>
        </form>
    </div>

    <!-- gap -->
    <div class="min-h-[60px]"></div>

    <x-footer.layout />

</x-layouts.app>
