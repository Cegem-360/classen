@props(['doors' => []])
<div class="mx-12 my-16 w-3/4">
    <h1 class="text-3xl font-bold uppercase">Összes ajtó</h1>
    <hr class="relative mb-3 mt-8 h-1 w-72 border-0 bg-sarga">
    <!-- gap -->
    <div class="min-h-[60px]"></div>
    <div class="mx-8 grid grid-cols-4 gap-6 md:grid-cols-2 sm:grid-cols-1">
        @foreach ($doors as $door)
            <div class="relative grid place-content-center bg-neutral-100 px-6 pb-2 pt-12">
                <div class="lazy absolute right-0 top-0 mr-2 mt-2 h-[32px] w-[32px]"
                    style="background-position: 0% 50%; background-image: url('{{ Vite::asset('resources/img/icons/heart-sprite.png') }}');"
                    loading='lazy'>
                </div>
                <a class="" href="{{ route('door.show', ['door' => $door->id]) }}" wire:navigate>
                    <img class="max-h-[330px]"
                        src="{{ !empty($door->img_url) ? $door->img_url : Vite::asset('resources/img/placeholder.webp') }}" />
                    <div class="w-full pt-2">
                        <h4 class="font-bold">{{ $door->category->name }} - {{ $door->name }}</h4>
                        <p>{{ $door->tag_name }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
