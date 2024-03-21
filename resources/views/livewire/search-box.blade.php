    <form class="relative flex items-center border-[1px] border-[#000]" wire.subbmit="fetchCategory">
        <input class="border-0 active:border-none text-xs" type="text" placeholder="Keresés" wire:model.live="search" wire:keyup="searchResult">
        <button class="flex-auto pr-2">
            <x-svg.search />
        </button>
        <div class="search-box mt-3">
            <!-- Search result list -->
            @if ($showdiv)
            <ul class="absolute left-0 top-9 list-none m-0 p-0 w-56 bg-white">
                @if (!empty($records))
                @foreach ($records as $record)
                <li class="px-3 py-1 bg-[#f4f4f4] even:bg-[#e8e8e8] hover:cursor-pointer" wire:click="fetchCategory({{ $record->id }})">{{ $record->name }}</li>
                @endforeach
                @endif
            </ul>
            @endif
        </div>
    </form>
