@props([
    'image',
    'title',
    'description' => null,
    'height' => 'h-[28rem]',
    'width' => 'w-full',
    'imgPosition' => null,
    'ctaText' => null,
    'ctaUrl' => null,
])

<div
    class="relative flex flex-col gap-8 p-8 justify-center items-center bg-[#C5C5C5] {{ $height }} {{ $width }} text-white">
    <img src="{{ Vite::asset('resources/img/' . $image) }}" alt=""
        class="{{ $imgPosition }} absolute inset-0 w-full h-full object-cover z-0 brightness-[.9]">
    <div class="absolute inset-0 w-full h-full z-[1] bg-gradient-to-b from-[#00000000] to-[#000000d0]"></div>
    <h2 class="relative max-w-[50%] sm:max-w-[90%] sm:text-3xl text-5xl text-center drop-shadow z-10">{{ __($title) }}
    </h2>
    @if ($description)
        <p class="relative max-w-[70%] sm:text-xl text-2xl text-center drop-shadow z-10">
            {{ __($description) }}</p>
    @endif
    @if ($ctaText && $ctaUrl)
        <a href="{{ route($ctaUrl) }}" wire:navigate
            class="px-8 py-4 border border-white text-xl z-10 hover:bg-[#0000005a]">{{ $ctaText }}</a>
    @endif
</div>
