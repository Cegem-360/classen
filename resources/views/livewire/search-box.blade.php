<div>
    <form class="flex items-center border-[1px] border-[#000] md:hidden" wire.subbmit="fetchCategory">
        <div>
            <!-- CSS -->
            <style type="text/css">
                .search-box .clear {
                    clear: both;
                    margin-top: 20px;
                }

                .search-box ul {
                    list-style: none;
                    padding: 0px;
                    width: 250px;
                    position: absolute;
                    margin: 0;
                    background: white;
                }

                .search-box ul li {
                    background: lavender;
                    padding: 4px;
                    margin-bottom: 1px;
                }

                .search-box ul li:nth-child(even) {
                    background: cadetblue;
                    color: white;
                }

                .search-box ul li:hover {
                    cursor: pointer;
                }

                .search-box input[type=text] {
                    padding: 5px;
                    width: 250px;
                    letter-spacing: 1px;
                }
            </style>

            <div class="search-box">
                <input type='text' wire:model.live="search" wire:keyup="searchResult">
                <button class="flex-auto pr-2">
                    <x-svg.search />
                </button>
                <!-- Search result list -->
                @if ($showdiv)
                    <ul>
                        @if (!empty($records))
                            @foreach ($records as $record)
                                <li wire:click="fetchCategory({{ $record->id }})">{{ $record->name }}</li>
                            @endforeach
                        @endif
                    </ul>
                @endif

                <div class="clear"></div>

            </div>

        </div>
    </form>
</div>
