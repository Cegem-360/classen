@props(['photos'])
<div class="container mx-auto">
    <div class="grid grid-cols-6 gap-4 lg:grid-cols-3 md:grid-cols-2">
        @foreach ($photos as $photo)
            <div class="relative">
                <img class="h-full w-full object-cover" src="{{ $photo }}" alt="">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <a class="text-lg font-bold text-white" href="{{ $photo }}" target="_blank">View</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
