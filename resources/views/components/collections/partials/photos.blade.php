@props(['photos'])
<div class="mx-8">
    <div class="grid grid-cols-4 gap-4 lg:grid-cols-3 md:grid-cols-2">
        @foreach ($photos as $photo)
            <div class="relative">
                <img class="h-full w-full object-cover" src="{{ $photo }}" alt="">
                <a href="{{ $photo }}" target="_blank" class="group absolute inset-0 flex items-center justify-center transition duration-300 bg-black bg-opacity-5 hover:bg-opacity-40">
                    <div class="text-lg font-bold text-white opacity-0 group-hover:opacity-100">
                        <x-svg.plus-icon></x-svg.plus-icon>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
